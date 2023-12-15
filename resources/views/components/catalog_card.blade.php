<div class="item{{ $property->id }}">

    <div class="properties ftco-animate">
        @if($property->reviews->isEmpty())
            <div class="estimation0">
                <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" x="0px" y="0px" viewBox="0 0 291.728 291.728" style="enable-background:new 0 0 291.728 291.728;" xml:space="preserve"><g><path style="fill:#e88941;" d="M291.728,145.86l-39.489,28.52l19.949,44.439l-48.469,4.896l-4.896,48.479l-44.439-19.959 l-28.52,39.489l-28.52-39.489l-44.439,19.959l-4.896-48.479l-48.469-4.896l19.949-44.439L0,145.86l39.489-28.511L19.53,72.909 l48.479-4.896l4.905-48.479l44.43,19.959l28.52-39.489l28.52,39.489l44.439-19.959l4.887,48.479l48.479,4.896l-19.949,44.43 C252.24,117.34,291.728,145.86,291.728,145.86z"/><path style="fill:#FFFFFF;" d="M108.035,127.615c-2.836,0-4.942,1.76-4.942,4.914v23.834h-0.137L82.05,129.694 c-0.857-1.14-2.899-2.088-4.158-2.088c-2.836,0-4.942,1.76-4.942,4.914v35.823c0,3.155,2.106,4.914,4.942,4.914 c2.845,0,4.951-1.76,4.951-4.914v-23.514h0.137l20.907,26.35c0.921,1.14,2.89,2.088,4.149,2.088c2.845,0,4.951-1.76,4.951-4.914 V132.53C112.986,129.384,110.88,127.615,108.035,127.615z M147.241,164.186h-12.209v-9.583h10.823c3.173,0,4.814-2.206,4.814-4.349 c0-2.216-1.586-4.358-4.814-4.358h-10.823v-9.209h11.607c3.1,0,4.686-2.206,4.686-4.349c0-2.206-1.514-4.367-4.686-4.367h-16.357 c-3.492,0-5.133,2.334-5.133,5.498v34.684c0,2.836,2.17,4.723,5.079,4.723h17.014c3.1,0,4.677-2.197,4.677-4.349 C151.918,166.329,150.405,164.186,147.241,164.186z M214,127.615c-3.164,0-4.686,1.76-5.27,4.541l-5.607,26.797h-0.137 l-8.571-27.617c-0.72-2.27-2.699-3.72-5.133-3.72s-4.422,1.45-5.142,3.72l-8.571,27.617h-0.128l-5.607-26.797 c-0.593-2.781-2.106-4.541-5.279-4.541c-2.89,0-4.677,2.143-4.677,4.167l0.255,2.134l8.379,34.428 c0.656,2.644,2.836,4.914,6.528,4.914c3.228,0,5.735-2.024,6.528-4.604l7.65-24.335h0.137l7.65,24.335 c0.793,2.58,3.301,4.604,6.528,4.604c3.693,0,5.881-2.27,6.537-4.914l8.37-34.428l0.264-2.134 C218.678,129.758,216.9,127.615,214,127.615z"/></g></svg>
            </div>
        @endif
        @auth
            @if(!is_null($property->fav_property_id))
                <img src="assets/images/favourites.png" class="favourites_img" data-id="{{ $property->id}}" data-action="remove">
            @else
               <img src="assets/images/favourites.png" class="favourites_img img_opacity" data-id="{{ $property->id}}" data-action="add">
            @endif
        @endauth
        <a href="{{ route('properties.show', $property) }}">

            <div class="img">
                <img src="assets/images/work-@php echo(rand(1,9)) @endphp.jpg" class="img-fluid" alt="Дом для аренды">
            </div>
            <div class="desc">
                <div class="d-grid pt-5">
                    <div class="desc-price">
                        <h5 class="title">{{ $property->title }}</h5>
                        <h5 class="price">{{ $property->price_per_day}}₽</h5>
                    </div>
                    <div class="desc-number">
                        <img src="assets/images/guests.png" alt="Гости" title="Количество гостей">
                        <p>{{$property->number_of_guests}}</p>
                    </div>
                    <div class="desc-number">
                        <img src="assets/images/rooms.png" alt="Комнаты" title="Количество комнат">
                        <p>{{$property->number_of_rooms}}</p>
                    </div>
                </div>
                <p class="h-info"><span class="location">
                        {{$property->address->country}},
                        {{$property->address->place}}</span>
                </p>


                    <div class="estimation1">
                        <div class="feedback">
                                <i id="star{{ $property->id }}" class="fas fa-star golden"><span style="color: black;">&nbsp;</span></i>
                            </div>

                        <div id="num{{ $property->id }}" class="feedback">
                            <svg viewBox="0 -9 512 512" xmlns="http://www.w3.org/2000/svg"  width="25" height="25"><path d="m22.539062 493.003906 32.195313-128.789062c-35.363281-39.578125-54.734375-88.699219-54.734375-139.214844 0-60.480469 26.785156-117.226562 75.417969-159.78125 48.0625-42.058594 111.839843-65.21875 179.582031-65.21875 67.832031 0 131.941406 23.140625 180.519531 65.164062 49.320313 42.664063 76.480469 99.429688 76.480469 159.835938s-27.160156 117.171875-76.480469 159.835938c-48.578125 42.023437-112.6875 65.164062-180.519531 65.164062-36.621094 0-72.128906-6.859375-105.652344-20.402344zm232.460938-463.003906c-124.066406 0-225 87.476562-225 195 0 45.378906 18.492188 89.625 52.074219 124.585938l5.746093 5.980468-20.359374 81.429688 80.875-40.433594 6.417968 2.777344c31.640625 13.710937 65.371094 20.660156 100.246094 20.660156 125.167969 0 227-87.476562 227-195s-101.832031-195-227-195zm0 0"/><path d="m135 150h240v30h-240zm0 0"/><path d="m135 210h240v30h-240zm0 0"/><path d="m135 270h180v30h-180zm0 0"/></svg>
                            <p id="numfeed{{ $property->id }}">&nbsp;</p>
                        </div>
                    </div>



            </div>
        </a>
    </div>

</div>

