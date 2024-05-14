<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MobileSeries;
use App\MobileSeriesVersion;
use App\Blog;
use App\Campaign;
use App\PhotoGallery;
use App\ChronicleMagazine;
use App\CaptureFuture;
use App\CaptureComment;
use App\User;
use Exception;
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
            ->where('image_for_page', 1)
            ->orderBy('image_order', 'asc')
            ->get();

        $capture_the_future_index = DB::table('capture_futures')
            ->where('is_active', 1)
            ->orderBy('image_order', 'asc')
            ->take(7)
            ->get();

        $ChronicleMagazines = DB::table('chronicle_magazines')
            ->where('is_active', 1)
            ->take(5)
            ->get();


        $CAMPAIGN_DURATION_IN_DAYS = env('CAMPAIGN_DURATION_IN_DAYS', 20);

        $ongoing_campaign = DB::table('campaigns')->where('campaign_status', 2)->latest()->first();
        $last_campaign = DB::table('campaigns')->where('campaign_status', 3)->latest()->first();
        $last_campaign_name = $last_campaign->title ?? '';
        $campaign_url = $ongoing_campaign ? route('frontend.campaign_detail', ['id' => $ongoing_campaign->id]) : route('frontend.campaign');
        $last_campaign = $last_campaign ? route('frontend.campaign_detail', ['id' => $last_campaign->id]) : route('frontend.campaign');
        $ongoing_campaign_photos_url = $ongoing_campaign ? route('frontend.campaign-photos', ['id' => $ongoing_campaign->id]) : route('frontend.campaign');

        return view('frontend.home', compact(
            'home_sliders', 
            'moments', 
            'capture_the_future_index',
            'campaign_url',
            'last_campaign',
            'ChronicleMagazines',
            'last_campaign_name',
            'ongoing_campaign',
            'ongoing_campaign_photos_url',
            'CAMPAIGN_DURATION_IN_DAYS'
        ));
    }

    public function capture_the_future()
    {
        $year = request()->year ? request()->year : date('Y');

        if(request()->all_year == 1)
        {
            $years = DB::table('capture_futures')
            ->select('year')
            ->distinct('year')
            ->orderby('year','desc')
            ->pluck('year');
           
        }
        else
        {
            $years[]=$year;
        }

        $capture_the_futures = [];
        // Loop through each year
        foreach ($years as $year) {
            // Fetch data for the current year
            $dataForYear = DB::table('capture_futures')
                ->where('is_active', 1)
                ->where('year', $year)
                ->orderBy('year', 'desc')
                ->get();

            // Add the data for the current year to the $yearlyData array
            $capture_the_futures[$year] = $dataForYear;
        }
        $all_year = request()->all_year ? request()->all_year : 0 ;

       

        return view('frontend.capture_the_future', compact('capture_the_futures','year','all_year'));
        
       
    }

    public function all_capture_the_future()
    {
        $year = request()->year ? request()->year : date('Y');

        $capture_the_futures = DB::table('capture_futures')
        ->where('is_active', 1)
        ->where('year', $year)
        ->orderBy('image_order', 'asc')
        ->paginate(12);

        return view('frontend.all_capture_the_future', compact('capture_the_futures','year'));
    }


    public function capture_the_future_deatils($id)
    {
        
         $image_details = DB::table('capture_futures')
            ->leftJoin('capture_photo_likes', 'capture_futures.id', '=', 'capture_photo_likes.capture_future_id')
            ->select(
                'capture_futures.*',
                DB::raw('count(capture_photo_likes.user_id) as likes_count')
            )
            ->where('capture_futures.id', '=', $id)
            ->first();

            // dd($image_details);

        $image_details->liked_by_user = false;

        

        if (auth()->user()) {
            $image_details->liked_by_user = DB::table('gallery_photo_likes')
                ->where('user_id', auth()->id())
                ->where('photo_gallery_id', $id)
                ->exists();
        }

        // $comments = DB::table('capture_comments as a')
        // ->select('a.*', 'b.id', 'b.name', 'b.email', 'b.img')
        // ->leftJoin('users as b', 'a.user_id', '=', 'b.id')
        // ->where('a.capture_future_id', $image_details->id)
        // // ->latest()
        // ->get();

        $comments = CaptureComment::with('comment_by','replies.comment_by')->where('capture_future_id',$image_details->id)->where('parent_comment_id',null)->get();

        return view('frontend.capture_image_description', compact('image_details','comments'));
    }

   

    public function photographer()
    {
        view()->share('active_menu', 'photographer');

        $photographers = DB::table('users')
            ->where('user_type', 2)
            ->latest()
            ->paginate(6);

        $vivographers = DB::table('users')
            ->where('is_vivographer', 1)
            ->latest()
            ->paginate(6);

        return view('frontend.galleries-1', compact('photographers', 'vivographers'));
    }

    public function user_profile(User $user)
    {
        view()->share('active_menu', 'photographer');

        /* $mobile_series = MobileSeries::query()
            ->with([
                'mobile_series_versions',
            ])
            ->get();

        foreach ($mobile_series as $series) {
            $series->load([
                'series_gallery_photos' => function ($query) use ($user) {
                    $query
                        ->where('photo_galleries.status', 1)
                        // ->where('is_photographer_image', 0)
                        ->where('photo_galleries.users_id', $user->id)
                        ->latest()
                        ->limit(18);
                }
            ]);
        } */

        $photos = DB::table('photo_galleries')
            ->where('users_id', $user->id)
            ->latest()
            ->limit(18)
            ->get();

            // dd($photos);

        return view('frontend.user-profile', compact('user', 'photos'));
    }

    public function videos()
    {
        view()->share('active_menu', 'videos');

        $main_video = DB::table('playlist1_main_vedios')->first();

        $videos = DB::table('playlist1_other_vedios')
            ->get();

        return view('frontend.videos', compact('main_video', 'videos'));
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

    public function gallery()
    {
        view()->share('active_menu', 'gallery');

        $ttl = 1800;

        $liked_photos_id = [];

        if (auth()->user()) {
            $liked_photos_id = DB::table('gallery_photo_likes')
                ->where('user_id', auth()->id())
                ->pluck('photo_gallery_id')
                ->toArray();
        }

        $ongoing_campaigns = DB::table('campaigns')
            ->where('campaign_status', '!=', 1)
            ->orderBy('id', 'desc')
            ->get();

        $mobile_series = MobileSeries::query()
            ->with([
                'mobile_series_versions',
            ])
            ->get();

        foreach ($mobile_series as $series) {
            $series->load([
                'series_gallery_photos' => function ($query) {
                    $query
                        ->leftJoin('gallery_photo_likes', 'photo_galleries.id', '=', 'gallery_photo_likes.photo_gallery_id')
                        ->where('photo_galleries.status', 1)
                        ->where('is_photographer_image', 0)
                        ->groupBy('photo_galleries.id')
                        ->latest()
                        ->limit(18)
                        ->select([
                            'photo_galleries.*',
                            DB::raw('count(gallery_photo_likes.user_id) as likes_count')
                        ]);
                }
            ]);
        }

        // dd( $mobile_series->toArray());

        $exhibitions = DB::table('exibitions')->get();

        $moments = DB::table('moments')
            ->where('is_active', 1)
            ->where('image_type', 1) // 1 - Moment of the month
            ->where('image_for_page', 2)
            ->orderBy('image_order', 'asc')
            ->get();

            // dd($moments->toArray());

        return view('frontend.exibition-1', compact('exhibitions', 'mobile_series', 'moments', 'liked_photos_id', 'ongoing_campaigns'));
    }

    public function campaign_photos($id)
    {
        // view()->share('active_menu', 'gallery');

        $campaign = Campaign::findOrFail($id);

        $liked_photos_id = [];

        if (auth()->user()) {
            $liked_photos_id = DB::table('gallery_photo_likes')
                ->where('user_id', auth()->id())
                ->pluck('photo_gallery_id');
                // ->toArray();
        }

        $ongoing_campaigns = DB::table('campaigns')
            ->where('campaign_status', '!=', 1)
            ->orderBy('id', 'desc')
            ->get();

        $mobile_series = MobileSeries::query()
            ->with([
                'mobile_series_versions',
            ])
            ->get();

        foreach ($mobile_series as $series) {
            $series->load([
                'series_gallery_photos' => function ($query) use ($id) {
                    $query
                        ->leftJoin('gallery_photo_likes', 'photo_galleries.id', '=', 'gallery_photo_likes.photo_gallery_id')
                        ->where('photo_galleries.status', 1)
                        ->where('is_photographer_image', 0)
                        ->where('campaign_id', $id)
                        ->groupBy('photo_galleries.id')
                        ->latest()
                        ->limit(18)
                        ->select([
                            'photo_galleries.*',
                            DB::raw('count(gallery_photo_likes.user_id) as likes_count')
                        ]);
                }
            ]);
        }


        /* $moments = DB::table('moments')
            ->where('is_active', 1)
            ->where('image_type', 1) // 1 - Moment of the month
            ->where('image_for_page', 2)
            ->orderBy('image_order', 'asc')
            ->get(); */

        return view('frontend.campaign_photo', compact('mobile_series', 'campaign', 'liked_photos_id', 'ongoing_campaigns'));
    }

    // A user can like any photo maximum 10 times a day
    public function like_gallery_photo(PhotoGallery $photoGallery)
    {
        $user_id = auth()->id();

        try {

            $user_photo_likes = DB::table('gallery_photo_likes as a')
                // ->select('a.photo_gallery_id', DB::raw('count(a.photo_gallery_id) as photo_like_count'))
                ->where('a.user_id', $user_id)
                ->whereDate('a.created_at', now()->format('Y-m-d'))
                // ->groupBy('a.photo_gallery_id')
                ->count();

            throw_if($user_photo_likes >= 10, new Exception('Oops! You can not like more than 10 time a day', 508));

            $type = 'like';
            DB::table('gallery_photo_likes')
                ->insert([
                    'photo_gallery_id' => $photoGallery->id,
                    'user_id' => $user_id,
                    'created_at' => now()
                ]);
          

            return response()->json([
                'status' => 'success',
                'type' => $type,
                'code' => 200,
                'message' => "Successfully liked"
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'code' => $e->getCode(),
                'message' => $e->getMessage()
            ]);
        }
    }

    public function like_capture_photo(Request $request)
    {
        $user_id = auth()->id();
      
        $photoGallery = CaptureFuture::find($request->capture_future_id);

    
        try {

            // $user_photo_likes = DB::table('capture_photo_likes as a')
            //     // ->select('a.photo_gallery_id', DB::raw('count(a.photo_gallery_id) as photo_like_count'))
            //     ->where('a.user_id', $user_id)
            //     ->whereDate('a.created_at', now()->format('Y-m-d'))
            //     // ->groupBy('a.photo_gallery_id')
            //     ->count();

            // throw_if($user_photo_likes >= 10, new Exception('Oops! You can not like more than 10 time a day', 508));

            $type = 'like';
            DB::table('capture_photo_likes')
                ->insert([
                    'capture_future_id' => $photoGallery->id,
                    'user_id' => $user_id,
                    'created_at' => now()
                ]);
          

            return response()->json([
                'status' => 'success',
                'type' => $type,
                'code' => 200,
                'message' => "Successfully liked"
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'code' => $e->getCode(),
                'message' => $e->getMessage()
            ]);
        }
    }

    public function capturephoto_comment(Request $request)
    {
        $user_id = auth()->id();

        $validated['comment_body']= $request->comment_body;
        $validated['parent_comment_id']= $request->parent_comment_id;
        $validated['user_id']=
        $validated['capture_future_id']= $request->capture_future_id;
        CaptureComment::create($validated);

        return response()->json([
            'status' => 'success',
            'code' => 200,
            'message' => "Successfully liked"
        ]);
    }

    public function capturephoto_comment_main(Request $request)
    {
        $user_id = auth()->id();
        $validated['comment_body']= $request->comment_body;
        $validated['user_id']=
        $validated['capture_future_id']= $request->capture_future_id;
        CaptureComment::create($validated);

        return response()->json([
            'status' => 'success',
            'code' => 200,
            'message' => "Successfully liked"
        ]); 
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

        $campaigns = Campaign::where('campaign_status', '!=', 1)
            ->orderBy('campaign_status', 'asc')
            // ->orderBy('started_at', 'desc')
            // ->orderBy('ended_at', 'desc')
            ->orderBy('id', 'desc')
            ->get();

        return view('frontend.campaign', compact('campaigns'));
    }

    public function chronicle_magazine()
    {
        view()->share('active_menu', 'chronicle_magazine');

        $chronicle_magazines = ChronicleMagazine::orderBy('id', 'desc')
            ->get();

        return view('frontend.chronicle_magazine', compact('chronicle_magazines'));
    }

    public function chronicle_magazine_deatils($id)
    {
        $chronicle_magazines = ChronicleMagazine::find($id);
       
        return view('frontend.chronicle_magazine_deatils', compact('chronicle_magazines'));
    }

    public function campaign_detail($id)
    {
        view()->share('active_menu', 'campaign');
        $data = Campaign::findOrFail($id);

        $CAMPAIGN_DURATION_IN_DAYS = env('CAMPAIGN_DURATION_IN_DAYS', 20);

        $user_id = auth()->id();
        $image_lists = DB::table('photo_galleries')
            ->leftJoin('gallery_photo_likes', 'gallery_photo_likes.photo_gallery_id', '=', 'photo_galleries.id')
            ->select(
                'photo_galleries.*',
                DB::raw('count(gallery_photo_likes.photo_gallery_id) as likes_count'),
                // DB::raw("IF((photo_galleries.id = gallery_photo_likes.photo_gallery_id AND gallery_photo_likes.user_id = {$user_id}), 1, 0) as auth_user_liked"),
            )
            ->where('photo_galleries.campaign_id', '=', $id)
            ->where('photo_galleries.status', 1)
            // ->where('photo_galleries.is_winner', '=', 1)
            ->groupBy('photo_galleries.id')
            ->orderByRaw('count(gallery_photo_likes.photo_gallery_id) desc')
            ->limit(10)
            ->get();

        $user_liked_photos = null;

        if (auth()->user()) {
            $user_liked_photos = DB::table('gallery_photo_likes')
                ->where('user_id', auth()->id())
                ->pluck('photo_gallery_id');
        }

        return view('frontend.campaign_detail', compact('data','image_lists', 'user_liked_photos', 'CAMPAIGN_DURATION_IN_DAYS'));
    }

    /* public function photographer()
    {
        return view('frontend.photographer');
    } */

    public function contact()
    {
        // TODO: 'Page is Under Construction';
        return view('frontend.contact');
    }

    public function image_description($id)
    {
        view()->share('active_menu', 'gallery');

        $image_details = DB::table('photo_galleries')
            ->leftJoin('mobile_series_versions', 'mobile_series_versions.id', '=', 'photo_galleries.mobile_series_versions_id')
            ->join('users', 'users.id', '=', 'photo_galleries.users_id')
            ->leftJoin('gallery_photo_likes', 'photo_galleries.id', '=', 'gallery_photo_likes.photo_gallery_id')
            ->select(
                'photo_galleries.*',
                'mobile_series_versions.name as mobile_series_versions_name',
                'users.name as username',
                DB::raw('count(gallery_photo_likes.user_id) as likes_count')
            )
            ->where('photo_galleries.id', '=', $id)
            ->first();

            // dd($image_details);

        $image_details->campaign = null;
        $image_details->liked_by_user = false;

        if ($image_details->campaign_id) {
            $image_details->campaign = DB::table('campaigns')->find($image_details->campaign_id);
        }

        if (auth()->user()) {
            $image_details->liked_by_user = DB::table('gallery_photo_likes')
                ->where('user_id', auth()->id())
                ->where('photo_gallery_id', $id)
                ->exists();
        }

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

        $liked_photos_id = [];

        if (auth()->user()) {
            $liked_photos_id = DB::table('gallery_photo_likes')
                ->where('user_id', auth()->id())
                ->pluck('photo_gallery_id')
                ->toArray();
        }

        $ongoing_campaigns = DB::table('campaigns')
            ->where('campaign_status', '!=', 1)
            ->get();

        $series = MobileSeries::findOrFail($series_id);
        $versions = DB::table('mobile_series_versions')
            ->where('mobile_series_id', $series_id)
            ->get();
        $is_photographer_image = request()->page_ref == 'photographer' ? 1 : 0;
        $photos = DB::table('photo_galleries')
            ->leftJoin('gallery_photo_likes', 'photo_galleries.id', '=', 'gallery_photo_likes.photo_gallery_id')
            ->when(
                request()->series_version,
                function ($query) {
                    $query->where('mobile_series_versions_id', request()->series_version);
                },
                function ($query) use ($versions) {
                    $query->whereIn('mobile_series_versions_id', $versions->pluck('id'));
                }
            )
            ->where('status', 1)
            ->where('is_photographer_image', $is_photographer_image)
            ->groupBy('photo_galleries.id')
            ->orderBy('id', 'desc')
            ->select([
                'photo_galleries.*',
                DB::raw('count(gallery_photo_likes.user_id) as likes_count')
            ])
            ->paginate(18);

        return view('frontend.photos_by_series', compact('series', 'versions', 'photos', 'liked_photos_id', 'ongoing_campaigns'));
    }
}
