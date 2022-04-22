<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MobileSeries;
use App\MobileSeriesVersion;
use App\Blog;
use App\Campaign;
use App\PhotoGallery;
use App\User;
// use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function __construct()
    {
        view()->share('active_menu', '');
    }

    public function index()
    {
        view()->share('active_menu', 'home');
        $ttl = 1800; // 30 minutes
        $home_sliders = DB::table('home_sliders')->get();

        $moments = DB::table('moments')
            ->where('is_active', 1)
            ->where('image_type', 1) // 1 - Moment of the month
            ->orderBy('image_order', 'asc')
            ->get();

        $mobile_series = DB::table('mobile_series')->get();

        return view('frontend.home', compact('home_sliders', 'moments'));
    }

    public function galleries()
    {
        view()->share('active_menu', 'photographer');

        $mobile_series = MobileSeries::query()
            ->with([
                'mobile_series_versions',
            ])
            ->get();

        foreach ($mobile_series as $series) {
            $series->load([
                'series_gallery_photos' => function ($query) {
                    $query->where('photo_galleries.status', 1)
                        ->where('is_photographer_image', 1)
                        ->latest()
                        ->limit(18);
                }
            ]);
        }

        return view('frontend.galleries-1', compact('mobile_series'));
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

        $exhibitions = DB::table('exibitions')
            ->select(
                'exibitions.*'
            )
            ->get();

        return view('frontend.exibition-1', compact('exhibitions', 'mobile_series', 'mobile_series_versions', 'mobile_series_versions_wise_image'));
    }

    public function exhibition()
    {
        view()->share('active_menu', 'gallery');

        $ttl = 1800;
        $mobile_series = MobileSeries::query()
            ->with([
                'mobile_series_versions',
            ])
            ->get();

        foreach ($mobile_series as $series) {
            $series->load([
                'series_gallery_photos' => function ($query) {
                    $query->where('photo_galleries.status', 1)
                        ->where('is_photographer_image', 0)
                        ->latest()
                        ->limit(18);
                }
            ]);
        }

        $exhibitions = DB::table('exibitions')->get();

        $moments = DB::table('moments')
            ->where('is_active', 1)
            ->where('image_type', 1) // 1 - Moment of the month
            ->orderBy('image_order', 'asc')
            ->get();

        return view('frontend.exibition-1', compact('exhibitions', 'mobile_series', 'moments'));
    }

    public function exhibition_photos_by_author($author_id)
    {
        view()->share('active_menu', 'gallery');

        $author = User::where('id', $author_id)
            ->select('id', 'name', 'email', 'contact')
            ->firstOrFail();

        $photo_galleries = PhotoGallery::query()
            ->with([
                'mobile_series_version.mobile_series'
            ])
            ->where('users_id', $author_id)
            ->where('status', 1)
            ->paginate(18);

        return view('frontend.exibition_photos_by_author', compact('author', 'photo_galleries'));
    }

    public function blogs()
    {
        view()->share('active_menu', 'blogs');

        // $mobile_series_version = MobileSeriesVersion::all();
        $blogs = Blog::all();
        return view('frontend.blogs', compact('blogs'));
    }

    public function blog_details($id)
    {
        view()->share('active_menu', 'blogs');

        $blog_details = Blog::find($id);
        $comments = DB::table('blog_comments as a')
            ->select('a.*', 'b.id', 'b.name', 'b.email', 'b.img')
            ->leftJoin('users as b', 'a.user_id', '=', 'b.id')
            ->where('a.blog_id', $blog_details->id)
            // ->latest()
            ->get();

        return view('frontend.blog_details', compact('blog_details', 'comments'));
    }

    public function campaign()
    {
        view()->share('active_menu', 'campaign');

        $campaigns = Campaign::all();
        return view('frontend.campaign', compact('campaigns'));
    }

    public function campaign_detail($id)
    {
        view()->share('active_menu', 'campaign');
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
        view()->share('active_menu', 'gallery');

        $image_details = DB::table('photo_galleries')
            ->join('mobile_series_versions', 'mobile_series_versions.id', '=', 'photo_galleries.mobile_series_versions_id')
            ->join('users', 'users.id', '=', 'photo_galleries.users_id')
            ->select(
                'photo_galleries.*',
                'mobile_series_versions.name as mobile_series_versions_name',
                'users.name as username'
            )
            ->where('photo_galleries.id', '=', $id)
            ->first();

        $image_tags = DB::table('photo_galleries_tags')
            ->join('tags', 'tags.id', '=', 'photo_galleries_tags.tags_id')
            ->select(
                'tags.*'
            )
            ->where('photo_galleries_tags.photo_galleries_id', '=', $id)
            ->select('name')
            ->get()
            ->pluck('name');

        return view('frontend.image_description', compact('image_details', 'image_tags'));
    }

    public function photos_by_series($series_id)
    {
        view()->share('active_menu', 'gallery');

        $series = MobileSeries::findOrFail($series_id);
        $versions = DB::table('mobile_series_versions')
            ->where('mobile_series_id', $series_id)
            ->get();
        $is_photographer_image = request()->page_ref == 'photographer' ? 1 : 0;
        $photos = DB::table('photo_galleries')
            ->when(request()->series_version,
                function ($query) {
                    $query->where('mobile_series_versions_id', request()->series_version);
                }, function ($query) use ($versions) {
                    $query->whereIn('mobile_series_versions_id', $versions->pluck('id'));
                })
            ->where('status', 1)
            ->where('is_photographer_image', $is_photographer_image)
            ->orderBy('id', 'desc')
            ->paginate(18);

        return view('frontend.photos_by_series', compact('series', 'versions', 'photos'));
    }
}
