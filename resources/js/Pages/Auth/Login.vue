<script setup>
import { useForm } from '@inertiajs/vue3'



const form = useForm({
	email: "",
	password: "",
	remember: "",
})



const submit = () => {
	form.post('/auth/login', {
		onError: () => form.reset('password', 'password_confirmation')
	});
}



</script>
<template>

	<Head title="Login Account |" />

	<!-- ============================ Page Title Start================================== -->
	<section class="page-head primary-bg-dark py-3" style="background:url(/homeassets/img/bg2.png)no-repeat;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-8 text-center">

					<h2 class="ipt-title text-light ">Welcome Back</h2>
					<span class="text-light opacity-75">Enter Your Details To Login</span>

				</div>
			</div>
		</div>
	</section>
	<!-- ============================ Page Title End ================================== -->

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

												<div class="form-floating mb-4">
													<input v-model="form.email" type="email" class="form-control"
														placeholder="Email"
														:class="{ 'is-invalid': form.errors.email }">
													<label for="Email">Email</label>
													<p class="text-danger">
														{{ form.errors.email }}
													</p>
												</div>
												<div class="form-floating mb-4">
													<input v-model="form.password" type="password" class="form-control"
														placeholder="Password"
														:class="{ 'is-invalid': form.errors.password }">
													<label for="password"> Password</label>
													<p class="text-danger">
														{{ form.errors.password }}
													</p>
												</div>
												<div class="modal-flex-item mb-3">
													<div class="ml-3 form-check">

														<input v-model="form.remember" id="remember"
															class="form-check-input" type="checkbox" />
														<label for="remember" class="modal-flex-last fs-6">
															Remember Me
														</label>
													</div>
													<div class="modal-flex-last">
														<a class="fs-6" :href="route('login')">Forgot Password?</a>
													</div>

												</div>
												<div class="form-group">
													<button class="btn btn-primary full-width fs-5 font--bold btn-lg"
														:disabled="form.processing">
														<span v-if="form.processing">Please wait...</span>
														<span v-else>Login</span>
													</button>
												</div>
												<div class="modal-flex-item mb-2 justify-content-center">
													<div class="modal-flex-last fs-6">
														<a :href="route('register')">Need An Account?</a>
													</div>


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