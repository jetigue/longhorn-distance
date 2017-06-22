import Vue from 'vue';
const swal = require('sweetalert2');

function totalSeconds() {
    var minutes = Number(document.getElementById('minutes_input').value);
    var seconds = Number(document.getElementById('seconds_input').value);

    document.getElementById('total_seconds').value = (minutes * 60) + seconds;
}

// new Vue ({
// 	el: '#menu',

// 	data: {
// 		show: true
// 	}
// });


Vue.component('button-create', {

	props: ['label', 'href'],

	template: `
		<a role="button" 
			:href="href"
			class="button is-outlined is-primary">
			<i class="fa fa-plus" aria-hidden="true">
			</i> &nbsp {{label}}
		</a>
	`
});

Vue.component('button-return', {

	props: ['label', 'href'],

	template: `
		<a role="button" 
			:href="href"
			class="button is-outlined is-primary">
			<i class="fa fa-arrow-left" aria-hidden="true">
			</i> &nbsp {{label}}
		</a>
	`
});

new Vue({
	el: '#header-button'
});



Vue.component('button-edit', {

	props: ['href'],

	template: `
	<button 
		class="button is-small is-white">
			<a :href="href">
			<i class="fa fa-pencil-square-o" id="edit-icon" aria-hidden="true"></i>
			</a>
	</button>
	`
});

Vue.component('button-delete', {

	props: ['action', 'token'],

	template: `
	<form method="POST" :action="action">
	    <input type="hidden" name="_method" value="DELETE">
	    <input type="hidden" name="_token" :value="token">
		<button class="button is-small is-white" id="delete"> 
			<i class="fa fa-trash-o" id="delete-icon" aria-hidden="true"></i>
		</button>
	</form>
	`
});

new Vue({
	el: 'table',
});



