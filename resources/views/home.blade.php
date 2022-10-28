@php

    $dataView = [
        [
                'title' => 'Cipresso su un cielo stellato',
                'author' => 'Vincent Van Gogh',
                'year' => '1889'
        ],
        [
                'title' => 'Natura morta con quattordici girasoli',
                'author' => 'Vincent Van Gogh',
                'year' => '1888'
        ],
        [
                'title' => 'Notte stellata',
                'author' => 'Vincent Van Gogh',
                'year' => '1889'
        ],
        [
                'title' => 'Campo di grano con corvi',
                'author' => 'Vincent Van Gogh',
                'year' => '1890'
        ],
        [
                'title' => 'La chiesa di Auvers',
                'author' => 'Vincent Van Gogh',
                'year' => '1890'
        ],
    ];

@endphp

<h1>Hello World!!</h1>
<div>
    @foreach ($dataView as $painting)
        <div>
            <p>{{$painting['title']}}</p>
            <p>{{$painting['author']}}</p>
            <p>{{$painting['year']}}</p>
        </div>
    @endforeach
</div>


