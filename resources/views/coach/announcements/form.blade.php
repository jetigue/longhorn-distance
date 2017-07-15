{{ csrf_field() }}

<div class="columns">
  <div class="column">
    <div class="field">
      <label class="label">Begin Date</label>
      <p class="control">
        <input
          name="begin_date"
          class="input is-medium" 
          type="date"
          value="{{old('begin_date', $teamAnnouncement->begin_date)}}"
          placeholder=""
          required>
      </p>
    </div>
  </div>
  <div class="column">
    <div class="field">
      <label class="label">End Date</label>
      <p class="control">
        <input
          name="end_date"
          class="input is-medium" 
          type="date"
          value="{{old('end_date', $teamAnnouncement->end_date)}}"
          placeholder=""
          required>
      </p>
    </div>
  </div>
</div>

<div class="field">
  <label class="label">Title</label>
  <p class="control">
    <input
    	name="title"
    	class="input is-medium" 
    	type="text"
    	value="{{old('title', $teamAnnouncement->title)}}"
    	placeholder="Announcement Title"
    	required>
  </p>
</div>

<div class="field">
  <label class="label">Body</label>
	<p class="control">
	<textarea name="body" rows="2" class="textarea is-medium" placeholder="Announcement Desctription" required>{{old('body', $teamAnnouncement->body)}}</textarea>
  </p>
</div>

<div class="field">
  <label class="label">Link (optional)</label>
  <p class="control">
    <input
      name="link"
      class="input is-medium" 
      type="url"
      value="{{old('link', $teamAnnouncement->link)}}"
      placeholder="Link">
  </p>
</div>

<div class="field">
  <label class="label">Link Label (optional)</label>
  <p class="control">
    <input
      name="link_text"
      class="input is-medium" 
      type="text"
      value="{{old('link_text', $teamAnnouncement->link_text)}}"
      placeholder="Link Label">
  </p>
</div>

<div class="field">
	<p class="control ">
		<button type="submit" class="button  is-primary form-button">
			{{$submitButtonText ?? 'Add Announcement'}}
		</button>
	</p>
</div>

@include('layouts.errors')