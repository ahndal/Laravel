<footer>
    <p>저는 꼬리말입니다. 다른 뷰에서 저를 입양해 가요.</p>
</footer>




@section('script')
    @parent
    <script>
       alert("저는 자식 뷰의 'script' 세션입니다.");
    </script>
@endsection
