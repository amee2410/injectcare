@isset($breadcrumbs)
<div class="card borderless-card">
    <div class="card-block inverse-breadcrumb">
        <div class="breadcrumb-header">
            <h5>{{$title}}</h5>
        </div>
        <div class="page-header-breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#!">
                        <i class="icofont icofont-home"></i>
                    </a>
                </li>
                @foreach ($breadcrumbs as $key => $value)
                <li class="breadcrumb-item">
                    <a href="{{ url($key) }}">{{$value}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endisset