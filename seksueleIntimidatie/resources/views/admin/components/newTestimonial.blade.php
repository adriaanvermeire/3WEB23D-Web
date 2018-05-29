@if (isset($unseen) && count($unseen) > 0)
<div class="card mx-auto shadow mt-2">
  <div class="card-body">
    <div class="card-title">
      <h3>Nieuwe verhalen!<br/><small>Er zijn verhalen die moeten nagekeken worden. De andere verhalen vind je <a href="#verhalen">hier</a>.</small></h3>
    </div>
    <div class="card-text">
      <table class='table'>
        @foreach ($unseen as $testimonial)
          <tr>
            <td>
              <a href='{!! route('admin.review', ['id' => $testimonial->id]) !!}' class="btn btn-warning btn-sm">Bekijken</a>
            </td>
            <td>@truncate($testimonial->title, 50)</td>
            @php
            $body = strip_tags($testimonial->body);
            @endphp
            <td>@truncate($body, 50)</td>
            <td><date>{{ $testimonial->created_at }}</date></td>
            <td class='d-flex justify-content-end'>
              <div class="btn-group">
                <a href='{!! route('admin.accept_testimonial', ['id' => $testimonial->id]) !!}' class="btn btn-success btn-sm">Publiceren</a>
                <a href='{!! route('admin.reject_testimonial', ['id' => $testimonial->id]) !!}' class="btn btn-danger btn-sm">Weerhouden</a>
              </div>
            </td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endif
