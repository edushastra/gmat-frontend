    <div class="division">
      {!! $page->passage !!}
    </div>
    <div class="division">
      {{ csrf_field() }}
          <textarea name="response" class="form-control editor" rows="8" cols="80" placeholder="Write Here..." required></textarea>
    </div>
