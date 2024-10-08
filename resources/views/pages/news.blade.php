@extends('layout')

@section('content')
    <div class="news">
        <div class="container">
            <div class="search">
                <p class="text-white text-center w-25" style="font-size:17px">Từ khóa:</p>

                <form class="w-75" action="{{ route('news') }}" method="get">
                    <div class="d-flex">
                            <input type="text" class="form-control me-3 me-md-5" name="search" value="{{ request('search') }}" placeholder="Nhập từ khóa để tìm kiếm">
                            <button type="submit" class="btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
            </div>
            <div class="row mt-5 news-content m-auto">
                @forelse ($news as $it)
                    <div class="col-12 col-md-4 mb-4">
                        <img src="{{ asset('assets/img').'/' .$it->img }}" alt="Ảnh đại diện" width="99%" height="210px">
                        <a href="{{ route('news.detail', $it->slug) }}" class="d-block title a-hover">{{ $it->title }}</a>
                        <a class="author a-hover"><i class="fa-solid fa-user me-1"></i>{{ $it->user->full_name }}</a>
                        <a class="post-time a-hover"><i class="fa-solid fa-calendar-days"></i> {{ $it->created_at }}</a>
                        <p class="short-content">{{ $it->short_content }}</p>
                        <a href="{{ route('news.detail', $it->slug) }}" class="see-move a-hover">Xem thêm</a>
                    </div>
                @empty
                    @if (request('search'))
                        <p class="fs-4 text-center">Không có tin tức nào trong từ khóa của bạn tìm kiếm</p>
                    @else
                        <p class="fs-4 text-center">Không có tin tức nào được đăng</p>
                    @endif
                @endforelse
            </div>
            {{ $news->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
