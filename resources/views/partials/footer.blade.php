@if(Request::is('blog/*'))
<footer class="footer">
</footer>
@endif


<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
            ]); ?>
</script>
<script src="{!! URL::asset('js/index.js') !!}"></script>
<script type="text/javascript" src="{!! URL::asset('js/jquery.js') !!}"></script>


</body>

</html>