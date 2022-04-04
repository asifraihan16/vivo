<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MobileSeries;
use App\MobileSeriesVersion;
use App\Blog;
use App\Campaign;
use App\PhotoGallery;
use App\User;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index()
    {
        $home_sliders = DB::table('home_sliders')
            ->select(
                'home_sliders.*'
            )
            ->get();

        $moments = DB::table('moment_of_the_months')
            ->select(
                'moment_of_the_months.*'
            )
            ->get();

        $playlist1_main = DB::table('playlist1_main_vedios')
            ->select(
                'playlist1_main_vedios.*'
            )
            ->get();

        $playlist1_other = DB::table('playlist1_other_vedios')
            ->select(
                'playlist1_other_vedios.*'
            )
            ->get();

        $playlist2_main = DB::table('playlist2_main_vedios')
            ->select(
                'playlist2_main_vedios.*'
            )
            ->get();

        $playlist2_other = DB::table('playlist2_other_vedios')
            ->select(
                'playlist2_other_vedios.*'
            )
            ->get();

        $blogs = DB::table('blogs')
            ->select(
                'blogs.*'
            )
            ->get();

        $mobile_series = DB::table('mobile_series')
            ->select(
                'mobile_series.*'
            )
            ->get();

        return view('frontend.home', compact('home_sliders', 'moments', 'playlist1_main', 'playlist1_other', 'playlist2_main', 'playlist2_other', 'blogs', 'mobile_series'));
    }

    public function galleries()
    {
        return view('frontend.galleries-1');
    }

    public function _exibition()
    {
        $mobile_series = MobileSeries::all();

        $mobile_series_versions = array();

        $mobile_series_versions_wise_image = array();

        foreach ($mobile_series as $value) {
            $mobile_series_versions[$value->id] = DB::table('mobile_series_versions')
                ->select(
                    'mobile_series_versions.*'
                )
                ->where('mobile_series_versions.mobile_series_id', '=', $value->id)
                ->get();
        }
        // return $mobile_series_versions;
        foreach ($mobile_series_versions as $key => $value) {
            foreach ($value as $data) {
                $mobile_series_versions_wise_image[$data->id] = DB::table('photo_galleries')
                    ->join('mobile_series_versions', 'mobile_series_versions.id', '=', 'photo_galleries.mobile_series_versions_id')
                    ->join('mobile_series', 'mobile_series.id', '=', 'mobile_series_versions.mobile_series_id')
                    ->select(
                        'photo_galleries.*',
                        'mobile_series_versions.name as mobile_series_versions_name'
                    )
                    ->where('photo_galleries.status', '=', 1)
                    ->where('photo_galleries.mobile_series_versions_id', '=', $data->id)
                    ->get();
            }
        }
        // return $mobile_series_versions_wise_image;

        $exhibitions = DB::table('exibitions')
            ->select(
                'exibitions.*'
            )
            ->get();

        return view('frontend.exibition-1', compact('exhibitions', 'mobile_series', 'mobile_series_versions', 'mobile_series_versions_wise_image'));
    }

    public function exhibition()
    {
        /* $mobile_series = MobileSeries::query()
            ->with([
                'mobile_series_versions',
            ])
            ->get(); */

        $mobile_series = MobileSeries::all();
        $final_data = array();

        foreach ($mobile_series as $series) {
            $versions = DB::table('mobile_series_versions')
                ->select(
                    'mobile_series_versions.*'
                )
                ->where('mobile_series_versions.mobile_series_id', '=', $series->id)
                ->get();

            $version_count = sizeof($versions);
            $desired_image_limit = 9;
            $per_version_limit = $version_count > 0 ? round($desired_image_limit / $version_count) : 0;

            foreach ($versions as $version) {

                $final_data[$series->name][$version->name] =  DB::table('photo_galleries')
                    ->join('mobile_series_versions', 'mobile_series_versions.id', '=', 'photo_galleries.mobile_series_versions_id')
                    ->join('mobile_series', 'mobile_series.id', '=', 'mobile_series_versions.mobile_series_id')
                    ->select(
                        'photo_galleries.*',
                        'mobile_series_versions.name as mobile_series_versions_name',
                        'mobile_series.name as mobile_series_name, mobile_series.id as mobile_series_id'
                    )
                    ->where('photo_galleries.status', '=', 1)
                    ->where('photo_galleries.mobile_series_versions_id', '=', $version->id)
                    ->limit($per_version_limit)
                    ->orderBy('created_at','desc')
                    ->get()->toArray();
            }
        }

        $exhibitions = DB::table('exibitions')
            ->select('exibitions.*')
            ->get();

        return view('frontend.exibition-1', compact('exhibitions', 'mobile_series', 'final_data'));
    }

    public function exhibition_photos_by_author($author_id)
    {
        $author = User::where('id', $author_id)
            ->select('id', 'name', 'email', 'contact')
            ->firstOrFail();

        $photo_galleries = PhotoGallery::query()
            ->with([
                'mobile_series_version.mobile_series'
            ])
            ->where('users_id', $author_id)
            ->paginate(18);

        return view('frontend.exibition_photos_by_author', compact('author', 'photo_galleries'));
    }

    public function blogs()
    {
        $mobile_series_version = MobileSeriesVersion::all();
        $blogs = Blog::all();
        return view('frontend.blogs', compact('mobile_series_version', 'blogs'));
    }

    public function blog_details($id)
    {
        $blog_details = Blog::find($id);
        return view('frontend.blog_details', compact('blog_details'));
    }

    public function campaign()
    {
        $campaigns = Campaign::all();
        return view('frontend.campaign', compact('campaigns'));
    }

    public function campaign_detail($id)
    {
        $data = Campaign::find($id);
        return view('frontend.campaign_detail', compact('data'));
    }

    public function photographer()
    {
        return view('frontend.photographer');
    }

    public function contact()
    {
        // TODO: 'Page is Under Construction';
        return view('frontend.contact');
    }

    public function image_description($id)
    {
        // return $id;
        $image_details = DB::table('photo_galleries')
            ->join('mobile_series_versions','mobile_series_versions.id','=','photo_galleries.mobile_series_versions_id')
            ->join('users','users.id','=','photo_galleries.users_id')
            ->select(
                'photo_galleries.*',
                'mobile_series_versions.name as mobile_series_versions_name',
                'users.name as username'
                )
            ->where('photo_galleries.id','=',$id)
            ->first();

        $image_tags = DB::table('photo_galleries_tags')
            ->join('tags','tags.id','=','photo_galleries_tags.tags_id')
            ->select(
                'tags.*'
                )
            ->where('photo_galleries_tags.photo_galleries_id','=',$id)
            ->get();


        return view('frontend.image_description', compact('image_details', 'image_tags'));
    }
}
