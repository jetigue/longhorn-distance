{{ csrf_field() }}

<div class="field">
  <label class="label">Event</label>
  <p class="control">
    <input
      name="event"
      class="input is-medium" 
      type="text"
      value="{{old('event', $teamEvent->event)}}"
      placeholder="Name of the event"
      required>
  </p>
</div>

<div class="field">
  <label class="label">Event Date</label>
  <p class="control">
    <input
      name="event_date"
      class="input is-medium" 
      type="date"
      value="{{old('event_date', $teamEvent->event_date)}}"
      placeholder=""
      required>
  </p>
</div>

<div class="field">
  <label class="label">Time</label>
  <p class="control">
    <input
      name="event_time"
      class="input is-medium" 
      type="text"
      value="{{old('event_time', $teamEvent->event_time)}}"
      placeholder="What time is the event?"
      required>
  </p>
</div>

<div class="field">
  <label class="label">Location</label>
  <p class="control">
    <input
      name="location"
      class="input is-medium" 
      type="text"
      value="{{old('location', $teamEvent->location)}}"
      placeholder="Location of the event"
      required>
  </p>
</div>

<div class="field">
  <label class="label">Event Details</label>
	<p class="control">
	<textarea name="details" rows="2" class="textarea is-medium" placeholder="Event Desctription" required>{{old('details', $teamEvent->details)}}</textarea>
  </p>
</div>

<div class="field">
  <label class="label">Link (optional)</label>
  <p class="control">
    <input
      name="link"
      class="input is-medium" 
      type="url"
      value="{{old('link', $teamEvent->link)}}"
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
      value="{{old('link_text', $teamEvent->link_text)}}"
      placeholder="Link Label">
  </p>
</div>

<div class="field">
	<p class="control ">
		<button type="submit" class="button  is-primary form-button">
			{{$submitButtonText ?? 'Add Event'}}
		</button>
	</p>
</div>

@include('layouts.errors')