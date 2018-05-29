<div id='testimonials' class="card shadow mt-2">
  <div class="card-body">
    <div class="card-title">
      <h2 id='verhalen'>Hun verhalen</h2>
      <p>Hier heb je een overzicht van alle verhalen. Indien er nieuwe verhalen zijn, dienen ze nagekeken te worden en vervolgens gepubliceerd of weerhouden worden.</p>
    </div>
    <div class="card-text">
    <table class='table'>
      <th></th>
      <th></th>
      <th>Titel</th>
      <th>Content</th>
      <th>Gepost op</th>
      <th></th>
    @if (isset($unseen))
      @foreach ($unseen as $testimonial)
        <tr>
          <td title='Dit verhaal moet nagekeken worden.'><i class="fas fa-exclamation-circle red"></i></td>
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
              <a href='{!! route('admin.accept_testimonial', ['id' => $testimonial->id]) !!}' class="btn btn-success btn-sm">Goed</a>
              <a href='{!! route('admin.reject_testimonial', ['id' => $testimonial->id]) !!}' class="btn btn-danger btn-sm">Slecht</a>
            </div>
          </td>
        </tr>
      @endforeach
      @foreach ($seen as $testimonial)
        <tr>
          @if (!$testimonial->highlight && $testimonial->published)
          <td>
            <a href="{!! route('admin.highlight', ['id' => $testimonial->id]) !!}" class='no-highlight text-dark'><i class="far fa-star"></i></a>
          </td>
          @elseif ($testimonial->published)
          <td>
            <a href="{!! route('admin.highlight', ['id' => $testimonial->id]) !!}"><i class="fas fa-star yellow"></i></a>
          </td>
          @else
          <td></td>
          @endif
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
            @if ($testimonial->published)
              <a href='{!! route('admin.reject_testimonial', ['id' => $testimonial->id]) !!}' class="btn btn-danger btn-sm">Weerhouden</a>
            @else
              <a href='{!! route('admin.accept_testimonial', ['id' => $testimonial->id]) !!}' class="btn btn-success btn-sm">Publiceren</a>
            @endif
          </td>
        </tr>
      @endforeach
      </table>
    @endif
    </div>
  </div>
</div>
