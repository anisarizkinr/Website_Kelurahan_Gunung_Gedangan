<div class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="widget">
          <h3>Kontak Kami</h3>
          @if ($kontak)
          <ul class="list-unstyled links">
            <li>{{ $kontak->alamat }}</li>
            <li>{{ $kontak->telepon }}</li>
            <li>{{ $kontak->email }}</li>
          </ul>
          @endif
          <ul class="list-unstyled social">
            <li>
              @foreach ($sosmed as $ss)             
              <a href="{{ $ss->link }}"><span class="icon-{{ $ss->icon}}"></span></a>
              @endforeach
            </li>
          </ul>
        </div>

        <!-- /.widget -->
      </div>
      <div class="col-lg-3">
      <div class="widget">
      <h3>PETA LOKASI</h3>
        <div class="maps">
        @if ($maps)
        <iframe src="{{ $maps->link }}" width="750" height="180" style="margin-top: 180px;"></iframe>
        @endif
        </div>
      </div>
      </div>
      <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</div>
<!-- /.site-footer -->