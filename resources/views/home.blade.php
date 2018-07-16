@include('base')

@section('homeContent')
    <div class="content">
        Welcome slakfjskldfj
    </div>
@endsection

<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
            ]); ?>
</script>
<script src="{!! URL::asset('js/app.js') !!}"></script>
<script type="text/javascript" src="{!! URL::asset('js/jquery.js') !!}"></script>
<script type="text/javascript" src="{!! URL::asset('js/bootstrap.js') !!}"></script>
