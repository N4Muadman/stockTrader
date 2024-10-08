@extends('layout')
@section('content')
    <div class="news-detail">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-12 col-md-3">
                    <div class="heading heading-fixed" id="heading">
                        <h2 class="text-center m-3">Nội dung chính</h2>
                        <div class="heading-content" id="toc"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 news-detail-content">
                    <img src="{{ asset('assets/img') .'/' .$newsDetail->img }}" class="mb-4" width="100%" alt="Ảnh news">
                    <h1 class="a-hover">{{ $newsDetail->title }}</h1>
                    <a class="author a-hover"><i class="fa-solid fa-user me-2"></i>{{ $newsDetail->user->full_name }}</a>
                    <a class="post-time a-hover"><i class="fa-solid fa-calendar-days"></i> {{ $newsDetail->created_at }}</a>
                    <div class="mt-4">{!! $newsDetail->content !!}</div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="featured-news mb-5">
                       <p class="news-star"><i class="fa-solid fa-star me-1"></i> Tin Tức nổi bật</p>
                       @foreach ($news->OrderBy('view', 'desc')->take(5)->get() as $it)
                            <div class="item">
                                <img src="{{ asset('assets/img') .'/' .$it->img }}" width="25%" alt="">
                                <a href="{{ route('news.detail', $it->slug) }}" class="ms-2 title a-hover" >{{ $it->title }}</a>
                                <p><i class="fa-solid fa-eye"></i> {{ $it->view }}</p>
                            </div>
                       @endforeach
                    </div>
                    <div class="featured-news">
                        <p class="news-star"> Tin tức mới nhất</p>
                        @foreach ($news->OrderBy('created_at', 'desc')->take(3)->get() as $it)
                            <div class="item">
                                <img src="{{ asset('assets/img') .'/' .$it->img }}" width="25%" alt="">
                                <a href="{{ route('news.detail', $it->slug) }}" class="ms-2 title a-hover" >{{ $it->title }}</a>
                                <p><i class="fa-solid fa-eye"></i> {{ $it->view }}</p>
                            </div>
                       @endforeach
                    </div>
               </div>
            </div>
            <div class="share-news mt-5 text-center">
                <p class="fs-5 fw-blod mb-2">Chia sẻ bài viết</p>
                <div class="share-news-icon">
                    <a href="https://telegram.com"><i class="fa-brands fa-telegram"></i></a>
                    <a href="https://facebook.com"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://tiktok.com"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="https://youtube.com"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            initTOC(); // Gọi hàm tạo mục lục sau khi trang được tải

            function initTOC() {
                // Lấy tất cả các heading trong bài viết
                const headings = document.querySelectorAll('.news-detail-content h1, .news-detail-content h2, .news-detail-content h3, .news-detail-content h4, .news-detail-content h5, .news-detail-content h6');
                if (headings.length === 0) return;

                // Khai bào nơi mà TOC sẽ được chèn vào
                const tocContainer = document.querySelector('#toc');

                // Xác định cấp độ bắt đầu của TOC
                const startingLevel = headings[0].tagName[1];

                // Tạo TOC rỗng
                const toc = document.createElement('ul');

                // Theo dõi các cấp độ heading trước đó
                const prevLevels = [0, 0, 0, 0, 0, 0];

                // Lặp qua từng heading và thêm chúng vào TOC
                headings.forEach((heading, index) => {
                    const level = parseInt(heading.tagName[1]);

                    // Tăng các cấp độ trước đó lên đến cấp độ hiện tại
                    prevLevels[level - 1]++;
                    for (let j = level; j < prevLevels.length; j++) {
                        prevLevels[j] = 0;
                    }

                    // Tạo số mục cho mục đó
                    const sectionNumber = prevLevels.slice(startingLevel - 1, level).join('.').replace(/\.0/g, "");

                    // Tạo ID mới và gán vào heading
                    const newHeadingId = `${heading.textContent.toLowerCase().replace(/ /g, '-')}`;
                    heading.id = newHeadingId;

                    // Tạo liên kết mục cho heading
                    const anchor = document.createElement('a');
                    anchor.setAttribute('href', `#${newHeadingId}`);
                    anchor.textContent = heading.textContent;

                    // Tạo thẻ <li> để thêm vào TOC
                    const listItem = document.createElement('li');
                    listItem.textContent = sectionNumber + ' ';
                    listItem.appendChild(anchor);

                    // Thêm CSS class cho từng mục lục
                    const className = `toc-${heading.tagName.toLowerCase()}`;
                    listItem.classList.add('toc-item', className);

                    // Bỏ thẻ <li> vừa tạo vào TOC
                    toc.appendChild(listItem);
                });

                // Thêm TOC vào DOM
                tocContainer.innerHTML = '';
                tocContainer.appendChild(toc);

                // Thêm event listener cho window object để lắng nghe sự kiện scroll
                window.addEventListener('scroll', function () {
                    let scroll = window.scrollY;
                    let height = window.innerHeight;
                    let offset = 200;

                    headings.forEach(function (heading, index) {
                        let target = document.querySelector(`#toc li:nth-of-type(${index + 1}) > a`);
                        let pos = heading.getBoundingClientRect().top + scroll;

                        if (scroll > pos - height + offset) {
                            if (headings[index + 1] !== undefined) {
                                let next_pos = headings[index + 1].getBoundingClientRect().top + scroll;
                                if (scroll > next_pos - height + offset) {
                                    target.classList.remove('heading-active');
                                } else {
                                    target.classList.add('heading-active');
                                }
                            } else {
                                target.classList.add('heading-active');
                            }
                        } else {
                            target.classList.remove('heading-active');
                        }
                    });
                });
            }
        });
    </script>

@endsection
