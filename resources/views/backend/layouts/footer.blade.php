@section('footer')
    <!-- footer content -->
    <footer>
        <div class="pull-right">
            Developed By <a href="{{route('index')}}">Laravel2pm</a>
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
    </div>
    </div>


    <!-- jQuery -->
    <script src="{{url('backend/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{url('backend/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{url('backend/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{url('backend/vendors/nprogress/nprogress.js')}}"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="{{url('backend/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
    <script src="{{url('backend/vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
    <script src="{{url('backend/vendors/google-code-prettify/src/prettify.js')}}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{url('backend/build/js/custom.min.js')}}"></script>

    </body>
    </html>

@endsection
