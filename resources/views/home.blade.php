@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col-4">
            <div class="ml-5"><img src="/svg/circleimage.png" height="200" alt="" class="pl-5"></div>
        </div>
        <div class="col-8">
            <div class="d-flex pt-2"> 
                <div class="pr-4 pt-2"><h3>Our CodeGram</h3></div>
                <div><button class="btn btn-primary"> Follow</button></div>
            </div>
            <div class="mt-3 d-flex">
                <div class="pr-5"><span class="font-weight-bolder pr-1">351</span> <span class="lead">posts</span></div>
                <div class="pr-5"><span class="font-weight-bolder pr-1">62.7k</span> <span class="lead">followers</span></div>
                <div><span class="font-weight-bolder pr-1">292</span> <span class="lead">following</span></div>
            </div>
            <div>
                <div class="lead font-weight-bold mt-3">freeCodeCamp.org</div>            
                <div class="lead"> We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
                <div class="lead"><a href="https://www.freecodecamp.org"> www.freecodecamp.org</a></div>
            </div>
        </div>
    </div>
    <hr class="mt-5" />
    <div class="row mb-3">
        <div class="col-4 offset-4 ">
            <div class="d-flex"> 
                <div class="">
                    <i class="fa fa-table" aria-hidden="true"></i>
                    <span>POSTS</span>
                </div>
                <div>
                    <i class="fa fa-address-book-o" aria-hidden="true"></i>
                    <span>TAGGED</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-4">
            <img class="w-100" alt="Photo by freeCodeCamp.org on December 22, 2020. Image may contain: 2 people, indoor." class="FFVAD" decoding="auto" style="object-fit: cover;" sizes="293px" srcset="https://instagram.fdac6-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.126.1030.1030a/s150x150/132108303_387834418947654_9162973108623918750_n.jpg?_nc_ht=instagram.fdac6-1.fna.fbcdn.net&amp;_nc_cat=106&amp;_nc_ohc=ZIDn17H8mGsAX_YVUbA&amp;tp=1&amp;oh=df6c99c1975b56296fdfb2d9298c12fc&amp;oe=60132BA5 150w,https://instagram.fdac6-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.126.1030.1030a/s240x240/132108303_387834418947654_9162973108623918750_n.jpg?_nc_ht=instagram.fdac6-1.fna.fbcdn.net&amp;_nc_cat=106&amp;_nc_ohc=ZIDn17H8mGsAX_YVUbA&amp;tp=1&amp;oh=2d8f5326df290082c56fdda11f2a418d&amp;oe=6012DDA3 240w,https://instagram.fdac6-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.126.1030.1030a/s320x320/132108303_387834418947654_9162973108623918750_n.jpg?_nc_ht=instagram.fdac6-1.fna.fbcdn.net&amp;_nc_cat=106&amp;_nc_ohc=ZIDn17H8mGsAX_YVUbA&amp;tp=1&amp;oh=720f727e061a1a9eabb6278ae0b6ef46&amp;oe=6014AEDD 320w,https://instagram.fdac6-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.126.1030.1030a/s480x480/132108303_387834418947654_9162973108623918750_n.jpg?_nc_ht=instagram.fdac6-1.fna.fbcdn.net&amp;_nc_cat=106&amp;_nc_ohc=ZIDn17H8mGsAX_YVUbA&amp;tp=1&amp;oh=f7e59203d0332e6bc53e172c6db03236&amp;oe=60153A9C 480w,https://instagram.fdac6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.126.1030.1030a/s640x640/132108303_387834418947654_9162973108623918750_n.jpg?_nc_ht=instagram.fdac6-1.fna.fbcdn.net&amp;_nc_cat=106&amp;_nc_ohc=ZIDn17H8mGsAX_YVUbA&amp;tp=1&amp;oh=b8d6bb2012786cfec7ef051dc0c2ed2f&amp;oe=60163315 640w" src="https://instagram.fdac6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.126.1030.1030a/s640x640/132108303_387834418947654_9162973108623918750_n.jpg?_nc_ht=instagram.fdac6-1.fna.fbcdn.net&amp;_nc_cat=106&amp;_nc_ohc=ZIDn17H8mGsAX_YVUbA&amp;tp=1&amp;oh=b8d6bb2012786cfec7ef051dc0c2ed2f&amp;oe=60163315" />
        </div>
        <div class="col-4">
            <img class="w-100" alt="Photo by freeCodeCamp.org on December 17, 2020. Image may contain: screen." class="FFVAD" decoding="auto" style="object-fit: cover;" sizes="293px" srcset="https://instagram.fdac6-1.fna.fbcdn.net/v/t51.2885-15/e35/c132.0.564.564a/s150x150/131897168_727687298175032_7267052498875164208_n.jpg?_nc_ht=instagram.fdac6-1.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=Oy9enLoeX2AAX_XbpAG&amp;tp=1&amp;oh=76d1e59839b099e963bb4c3f752050ba&amp;oe=6013043B 150w,https://instagram.fdac6-1.fna.fbcdn.net/v/t51.2885-15/e35/c132.0.564.564a/s240x240/131897168_727687298175032_7267052498875164208_n.jpg?_nc_ht=instagram.fdac6-1.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=Oy9enLoeX2AAX_XbpAG&amp;tp=1&amp;oh=66ba0e978b2d622bbb10b18de5219e51&amp;oe=6013F53D 240w,https://instagram.fdac6-1.fna.fbcdn.net/v/t51.2885-15/e35/c132.0.564.564a/s320x320/131897168_727687298175032_7267052498875164208_n.jpg?_nc_ht=instagram.fdac6-1.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=Oy9enLoeX2AAX_XbpAG&amp;tp=1&amp;oh=c37c568a406c0976f7524e3ce69d5d76&amp;oe=6014EFC3 320w,https://instagram.fdac6-1.fna.fbcdn.net/v/t51.2885-15/e35/c132.0.564.564a/s480x480/131897168_727687298175032_7267052498875164208_n.jpg?_nc_ht=instagram.fdac6-1.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=Oy9enLoeX2AAX_XbpAG&amp;tp=1&amp;oh=5c987b8cfa03655d711087d19b37d813&amp;oe=60136306 480w,https://instagram.fdac6-1.fna.fbcdn.net/v/t51.2885-15/e35/c132.0.564.564a/131897168_727687298175032_7267052498875164208_n.jpg?_nc_ht=instagram.fdac6-1.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=Oy9enLoeX2AAX_XbpAG&amp;tp=1&amp;oh=e04987b1cc7bb21391533af9d588247f&amp;oe=6013DA68 640w" src="https://instagram.fdac6-1.fna.fbcdn.net/v/t51.2885-15/e35/c132.0.564.564a/131897168_727687298175032_7267052498875164208_n.jpg?_nc_ht=instagram.fdac6-1.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=Oy9enLoeX2AAX_XbpAG&amp;tp=1&amp;oh=e04987b1cc7bb21391533af9d588247f&amp;oe=6013DA68" />
        </div>
        <div class="col-4">
            <img class="w-100" alt="Photo by freeCodeCamp.org on December 15, 2020. Image may contain: people sitting, screen, office and indoor." class="FFVAD" decoding="auto" style="object-fit: cover;" sizes="293px" srcset="https://instagram.fdac6-1.fna.fbcdn.net/v/t51.2885-15/e35/c52.0.724.724a/s150x150/131074722_3585003178205266_1692270944517370256_n.jpg?_nc_ht=instagram.fdac6-1.fna.fbcdn.net&amp;_nc_cat=110&amp;_nc_ohc=lb14YyAmn-EAX_40YeY&amp;tp=1&amp;oh=a58a1c7256fe80d2d342d0defe5bf408&amp;oe=6014A655 150w,https://instagram.fdac6-1.fna.fbcdn.net/v/t51.2885-15/e35/c52.0.724.724a/s240x240/131074722_3585003178205266_1692270944517370256_n.jpg?_nc_ht=instagram.fdac6-1.fna.fbcdn.net&amp;_nc_cat=110&amp;_nc_ohc=lb14YyAmn-EAX_40YeY&amp;tp=1&amp;oh=86b8e1e6a29f6388bcd8279263da44a1&amp;oe=6012B81D 240w,https://instagram.fdac6-1.fna.fbcdn.net/v/t51.2885-15/e35/c52.0.724.724a/s320x320/131074722_3585003178205266_1692270944517370256_n.jpg?_nc_ht=instagram.fdac6-1.fna.fbcdn.net&amp;_nc_cat=110&amp;_nc_ohc=lb14YyAmn-EAX_40YeY&amp;tp=1&amp;oh=1e611afc09d21d0da02712d6bb9d78cf&amp;oe=60138044 320w,https://instagram.fdac6-1.fna.fbcdn.net/v/t51.2885-15/e35/c52.0.724.724a/s480x480/131074722_3585003178205266_1692270944517370256_n.jpg?_nc_ht=instagram.fdac6-1.fna.fbcdn.net&amp;_nc_cat=110&amp;_nc_ohc=lb14YyAmn-EAX_40YeY&amp;tp=1&amp;oh=12dd52a7e6a4e7953054f044b05aa7e9&amp;oe=60153D82 480w,https://instagram.fdac6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c52.0.724.724a/s640x640/131074722_3585003178205266_1692270944517370256_n.jpg?_nc_ht=instagram.fdac6-1.fna.fbcdn.net&amp;_nc_cat=110&amp;_nc_ohc=lb14YyAmn-EAX_40YeY&amp;tp=1&amp;oh=f57acc53f331d12e0668d72b39f68f49&amp;oe=6013C0FB 640w" src="https://instagram.fdac6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c52.0.724.724a/s640x640/131074722_3585003178205266_1692270944517370256_n.jpg?_nc_ht=instagram.fdac6-1.fna.fbcdn.net&amp;_nc_cat=110&amp;_nc_ohc=lb14YyAmn-EAX_40YeY&amp;tp=1&amp;oh=f57acc53f331d12e0668d72b39f68f49&amp;oe=6013C0FB" />
        </div>
    </div>
    
</div>
@endsection
