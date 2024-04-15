@extends('master')

@section('content')
    <div class="blog-section">
        <h1 class="section-title">БЛОГ</h1>
        <div class="blog-section__group">
            @foreach($blogs as $blog_item)
                @if(strlen($blog_item['content']) > 16)
                    <div class="blog-section__group__item">
                        <img class="blog-section__group__item__image" src="{{$blog_item['imageURL']}}" alt="blog-image">
                        <p class="blog-section__group__item__text">
                            {{$blog_item['content']}} <span class="blog-section__group__item__text_highlighted">Читати далі...</span>
                        </p>
                    </div>
                @endif
            @endforeach
        </div>
    </div>


    <div class="info-section">
        <div class="info-section__container">
            <h1 class="info-section__container__title">ДОЛУЧАЙТЕСЬ ВИШИВАТИ <span
                    class="info-section__container__title_highlight">ДРОГОБИЦЬКУ СОРОЧКУ</span></h1>
            <p class="info-section__container__text">Отримай можливість створити унікальну сорочку</p>
        </div>
        <button onclick="openDialog()" class="course-button course-button_main-action">Долучитись до курсу</button>
    </div>

@endsection


@section('scripts')
    <script>
        let dialog = document.getElementById('course-registration');

        function openDialog() {
            dialog.showModal();
        }

        function closeDialog() {
            dialog.close();
        }
    </script>
@endsection
