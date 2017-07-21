import BarGraph from './components/BarGraph';
import PieChart from './components/PieChart';
import Vue from 'vue';


function totalSeconds() {
    var minutes = Number(document.getElementById('minutes_input').value);
    var seconds = Number(document.getElementById('seconds_input').value);

    document.getElementById('total_seconds').value = (minutes * 60) + seconds;
}

// Vue.component('modal', {

// 	template: `
// 		<div class="modal is-active">
// 		  <div class="modal-background"></div>
// 		  <div class="modal-card">
// 		    <header class="modal-card-head">
// 		      <p class="modal-card-title">Delete Record?</p>
// 		      <button class="delete" @click="$emit('close')"></button>
// 		    </header>
// 		    <section class="modal-card-body has-text-centered">
// 		      <h1 class="title is-2">Are You Sure?</h1>
// 		      <h3 class="subtitle is-4">You Will Not Be Able To Undo This</h3>
// 		    </section>
// 		    <footer class="modal-card-foot">
// 		      <a class="button is-success">Yes, Delete Record</a>
// 		      <a class="button" @click="$emit('close')">Cancel</a>
// 		    </footer>
// 		  </div>
// 		</div>
// 	`,
// });

// new Vue({
// 	el: '#root',

// 	data: {
// 		showDeleteModal: false
// 	}
// });


Vue.component('stat-card', {

	props: ['title', 'stat'],

	template: `
		<div class="card">
			<div class="card-header">
				<div>
					<h6>{{title}}</h6>
				</div>
			</div>
			<div class="card-content">
				<div class="content has-text-centered">
					<h1>{{stat}}</h1>
				</div
			<div>
		</div>
		`
});

new Vue({
	el: '.dashboard',

	components: { BarGraph, PieChart}
});

// new Vue ({
// 	el: '#menu',

// 	data: {
// 		show: true
// 	}
// });


// new Vue({
// 	el: '#dashboard'
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

Vue.component('delete-modal', {

	template: `
		<div class="modal is-active">
		  <div class="modal-background"></div>
		  <div class="modal-card">
		    <header class="modal-card-head">
		      <p class="modal-card-title">Delete Record?</p>
		      <button class="delete" @click="$emit('close')"></button>
		    </header>
		    <section class="modal-card-body has-text-centered">
		      <h1 class="title is-2">Are You Sure?</h1>
		      <h3 class="subtitle is-4">You Will Not Be Able To Undo This</h3>
		    </section>
		    <footer class="modal-card-foot">
		      <a class="button is-success" @click="onConfirmed">Yes, Delete Record</a>
		      <a class="button" @click="$emit('close')">Cancel</a>
		    </footer>
		  </div>
		</div>
	`,

	methods: {
		onConfirmed() {
			this.$emit('confirmed');
		}
	}
});

Vue.component('button-delete', {

	props: ['action', 'token'],

	template: 
		`
		<form ref="deleteForm" method="POST" :action="action">
			<input type="hidden" name="_method" value="DELETE">
	    	<input type="hidden" name="_token" :value="token">
		    <button class="button is-small is-white" id="delete">
				<i class="fa fa-trash-o" id="delete-icon" aria-hidden="true"></i>
			</button>	
		</form>
		`,

});

new Vue({
	el: 'table',

	data: {
		showDeleteModal: false
	},

	methods: {

		onConfirmed() {
			this.$els.deleteForm.submit();
			
		}
	}
});



