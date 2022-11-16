@props([
    'photo',
    'campaign' => null,
    'userLikedPhotos' => null
])

<div class="work-item">
    <div class="photo-like-area" id="photo-like-area-{{ $photo->id }}">
        


        @if ($campaign && $campaign->campaign_status == 2)
            @php
                $user_liked_photos = $userLikedPhotos ? $userLikedPhotos->toArray() : [];
            @endphp

            <span class="liked-bubble" id="liked-bubble-{{ $photo->id }}">
                <i class="fa fa-heart"></i>
                {{-- Liked --}}
            </span>

            <a href="javascript:;" 
                class="{{ in_array($photo->id, $user_liked_photos) ? 'liked' : 'unliked' }}"
                onclick="likeGalleryPhoto({{ $photo->id }})" id="photo-like-btn-{{ $photo->id }}">
                <i class="fa fa-heart"></i>
            </a>
        @else
            <a href="javascript:;" class="likes unliked">
                <i class="fa fa-heart"></i>
                {{ $photo->likes_count }}
            </a>
        @endif
    </div>
    <figure>
        <a href="{{ url('image_description/' . $photo->id) }}" {{-- class="mfp-lightbox mfp-image" --}} title="{{ $photo->title }}">
            <img alt="{{ $photo->title }}"
                src="{{ $photo->img_thumbnail ? Storage::url($photo->img_thumbnail) : Storage::url($photo->img) }}"
                style="" />

            {{-- <img alt="Exibition Image" class="lazy iso-img-cls"
                data-src="{{ $photo->img_thumbnail ? Storage::url($photo->img_thumbnail) : Storage::url($photo->img) }}"> --}}

            {{-- <figcaption>
                <ul class="social">
                    <li>
                        <span class="icon">
                            <i
                                class="icon-magnifier"></i>
                        </span>
                    </li>
                </ul>
                <h3 class="photo-bottom-caption">{{ $photo->title }}</h3>
            </figcaption> --}}
        </a>
    </figure>

</div>
