<footer class="footer">

</footer>

<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
            ]); ?>
</script>
<script src="{!! URL::asset('js/app.js') !!}"></script>
<script type="text/javascript" src="{!! URL::asset('js/jquery.js') !!}"></script>


</body>

</html>