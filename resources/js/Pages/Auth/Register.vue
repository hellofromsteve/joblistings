<script setup>
import { useForm } from '@inertiajs/vue3'
import FlashMessage from "../../Components/FlashMessage.vue";



defineProps({
	flash: Object
})

const form = useForm({
	full_name: "",
	account_type: null,
	email: "",
	phone: "",
	password: "",
	password_confirmation: "",
})



const submit = () => {
	form.post('/auth/register', {
		onError: () => form.reset('password', 'password_confirmation')
	});
}



</script>
<template>

	<Head title="Register Account |" />

	<!-- ============================ Page Title Start================================== -->
	<section class="page-head primary-bg-dark py-3" style="background:url(/homeassets/img/bg2.png)no-repeat;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-8 text-center">

					<h2 class="ipt-title text-light ">Create An Account</h2>
					<span class="text-light opacity-75">Create an account or signin</span>

				</div>
			</div>
		</div>
	</section>
	<!-- ============================ Page Title End ================================== -->

	<div v-if="$page.props.flash.message" class="alert alert-danger d-flex justify-content-center align-item-center"
		role="alert">
		{{ $page.props.flash.message }}

	</div>


	<!-- ============================ Login Form Start ================================== -->
	<section class="gray-simple pt-4">
		<div class="container">
			<!-- row Start -->
			<div class="row justify-content-center">

				<!-- Single blog Grid -->
				<div class="col-xl-6 col-lg-8 col-md-12">
					<div class="vesh-detail-bloc">
						<div class="vesh-detail-bloc-body pt-2">

							<div class="tab-content">
								<div class="tab-pane fade show active">
									<div class="row gx-3 gy-4">
										<div class="modal-login-form">

											<!-- Forms Input -->
											<form @submit.prevent="submit">

												<div class="row">
													<div class="col-md-6 ">
														<div class="form-floating mb-4">
															<input v-model="form.full_name" type="text"
																class="form-control" placeholder="First Name"
																:class="{ 'is-invalid': form.errors.full_name }">
															<label for="first_name">Full Name</label>
															<p class="text-danger">
																{{ form.errors.full_name }}
															</p>
														</div>
													</div>

													<div class="col-md-6 ">
														<div class="form-floating mb-4">
															<input v-model="form.phone" type="tel" class="form-control"
																placeholder="Phone"
																:class="{ 'is-invalid': form.errors.phone }">
															<label for="phone">Phone</label>
															<p class="text-danger">
																{{ form.errors.phone }}
															</p>
														</div>
													</div>




												</div>



												<div class="form-floating mb-4">
													<select class="form-select" v-model="form.account_type"
														name="account_type">
														<option value="null">Choose Account Type</option>
														<option value="candidate">Candidate</option>
														<option value="employer">Employer</option>

													</select>
												</div>
												<p class="text-danger">
													{{ form.errors.account_type }}
												</p>




												<div class="form-floating mb-4">
													<input v-model="form.email" type="email" class="form-control"
														placeholder="Email"
														:class="{ 'is-invalid': form.errors.email }">
													<label for="email">Email</label>
													<p class="text-danger" v-if="form.errors.email">
														{{ form.errors.email }}
													</p>
												</div>



												<div class="form-floating mb-4">
													<input v-model="form.password" type="password" class="form-control"
														placeholder="Password"
														:class="{ 'is-invalid': form.errors.password }">
													<label for="password">Password</label>
													<p class="text-danger">
														{{ form.errors.password }}
													</p>
												</div>
												<div class="form-floating mb-4">
													<input v-model="form.password_confirmation" type="password"
														class="form-control" placeholder="Password"
														:class="{ 'is-invalid': form.errors.password_confirmation }">
													<label for="password_confirmation">Confirm Password</label>
												</div>
												<div class="modal-flex-item mb-3">
													<div class="modal-flex-last">
														<a :href="route('login')">Already Have An Account?</a>
													</div>
												</div>
												<div class="form-group">
													<button class="btn btn-primary full-width fs-5 font--bold btn-lg"
														:disabled="form.processing">
														<span v-if="form.processing">Please wait...</span>
														<span v-else>Create An Account</span>
													</button>
												</div>

											</form>
										</div>

									</div>
								</div>


							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- /row -->
		</div>
	</section>
	<!-- ============================ Login Form End ================================== -->

</template>