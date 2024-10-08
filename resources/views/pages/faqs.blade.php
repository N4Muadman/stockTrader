@extends('layout')

@section('content')
    <div class="faqs">
        <div class="header">
            <div class="container d-flex flex-column align-items-center">
                <h1 class="text-center mb-5 text-white">Giải Đáp Thắc Mắc</h1>
                <div class="input-container">
                    <form action="{{ route('faqs') }}" method="get">
                        <span class="icon-search"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" name="search" class="custom-input" placeholder="Chúng tôi có thể giúp gì cho bạn?"/>
                        <button class="custom-button">Tìm kiếm</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="faqs-content">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-12 col-md-3 mb-5">
                        <div class="catagory">
                            @foreach ($categories->unique('category_id') as $it )
                                @if($it->category_faqs)
                                    <a href="{{ route('faqs', ['category' => $it->category_id]) }}" class="{{ $it->category_id == request('category') ? 'active' : '' }}">
                                        {{ $it->category_faqs->name }}
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        @foreach ($faqs as $it)
                        <div class="faqs-content-item">
                            <div class="question">
                                <p>{{ $it->question }}</p>
                                <span class="icon-question">
                                    <i class="fa-solid fa-caret-up"></i>
                                </span>
                            </div>
                            <div class="answer">
                                <p>
                                    {{ $it->answer }}</p>
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
