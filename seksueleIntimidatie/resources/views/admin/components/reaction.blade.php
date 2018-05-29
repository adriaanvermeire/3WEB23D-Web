<div id='reaction' class="card shadow mt-2">
  <div class="card-body">
    <div class="card-title">
      <span class=" d-flex justify-content-between align-items-center">
        <h2>Hoe reageren?</h2>
        <a class="btn btn-success ml-2 text-white" href='{!! route('admin.create-scenario') !!}'><i class="fas fa-plus"></i> Toevoegen</a>
      </span>
      <p>Hier vind je een overzicht van alle situaties die de gebruikers te zien krijgen op de 'Hoe reageren?'-pagina. Elk scenario heeft een titel (de omschrijving), een goede reactie en een slechte reactie.</p>
    </div>
    <div class="card-text">
      @if(count($scenarios) > 0)
      <table class="table">
        <th></th>
        <th>Titel</th>
        <th>Goede reactie</th>
        <th>Slechte reactie</th>
        <th></th>
        @foreach ($scenarios as $scenario)
        <tr>
          <td>
            <a href='{!! route('admin.edit-scenario', ['id' => $scenario->id]) !!}' class="btn btn-warning btn-sm">Bewerken</a>
          </td>
          <td>@truncate($scenario->name, 50)</td>
          <td>@truncate($scenario->good, 50)</td>
          <td>@truncate($scenario->bad, 50)</td>
          <td>
            {{ Form::open(['route' => ['admin.delete-scenario', $scenario->id], 'method' => 'delete']) }}
            <button type="submit" class='btn btn-danger'>Verwijderen</button>
            {{ Form::close() }}
          </td>
        </tr>
        @endforeach
      </table>
      @else
      <p>Er zijn nog geen scenario's toegevoegd! Voeg er een paar om op de site te tonen.</p>
      @endif
    </div>
  </div>
</div>
