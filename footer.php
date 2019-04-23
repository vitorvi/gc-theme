    <footer id="contato" class="negative">
		<div id="formulario-contato">
			<div class="gc-container">
				<h1 class="col-12 col-lg-8 offset-lg-2"><?php echo get_field('texto_tem_alguma_ideia', 'options'); ?></h1>
				<div class="gc-container form">
					<div class="row">
						<?php if(qtrans_getLanguage() == "pb") : ?>
							<a class="btn btn-primary btn-lg ml-auto mr-auto" href="<?php echo get_field('link_tem_alguma_ideia', 'options'); ?>" target="_blank"">
								<?php echo get_field('texto_botao_tem_alguma_ideia', 'options'); ?>
							</a>
						<?php else : ?>
							<a class="btn btn-primary btn-lg ml-auto mr-auto" href="<?php echo get_field('link_tem_alguma_ideia_en', 'options'); ?>" target="_blank"">
								<?php echo get_field('texto_botao_tem_alguma_ideia', 'options'); ?>
							</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	
		<div id="contatos">
			<div class="gc-container">
				<div class="row">
					<address class="col-12 col-md-6 col-lg-4">
						<ul class="no-bullet">
							<li><?php echo get_field('endereco', 'options'); ?></li>
							<li><a href="mailto:<?php echo get_field('email', 'options'); ?>"><?php echo get_field('email', 'options'); ?></a></li>
							<li>
								<a href="<?php echo get_field('url_mapa', 'options'); ?>" target="_blank"">
									<svg xmlns="http://www.w3.org/2000/svg" width="21" height="24" viewBox="0 0 21 24">
		    							<path d="M17.77,3A10.28,10.28,0,0,0,3.23,17.56l5.86,5.86a2,2,0,0,0,2.83,0l5.86-5.86A10.3,10.3,0,0,0,17.77,3ZM16.36,16.14,10.5,22,4.64,16.14a8.28,8.28,0,1,1,11.72,0Z"/>
	    								<path d="M10.5,5.11a5,5,0,1,0,5,5A5,5,0,0,0,10.5,5.11Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,10.5,13.11Z"/>
									</svg>
									Local no Maps
								</a>
							</li>
						</ul>
						
						<ul class="midias d-none d-md-flex d-lg-none text-left no-bullet">
							<?php if(get_field('facebook', 'options')) : ?>
								<li>
									<a href="<?php echo get_field('facebook', 'options'); ?>" target="_blank"">
										<svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill-rule="evenodd">
		    								<path d="M 22.6754 0L 1.32457 0C 0.592954 0 0 0.592952 0 1.32457L 0 22.6753C 0 23.4069 0.592954 24 1.32457 24L 12.8192 24L 12.8192 14.7059L 9.69149 14.7059L 9.69149 11.0838L 12.8192 11.0838L 12.8192 8.41266C 12.8192 5.31283 14.7124 3.62489 17.4778 3.62489C 18.8024 3.62489 19.9409 3.72344 20.2726 3.7675L 20.2726 7.00707L 18.3547 7.00797C 16.8508 7.00797 16.5596 7.72259 16.5596 8.77127L 16.5596 11.0838L 20.1463 11.0838L 19.6794 14.7059L 16.5596 14.7059L 16.5596 24L 22.6754 24C 23.407 24 24 23.4069 24 22.6753L 24 1.32457C 24 0.592952 23.407 0 22.6754 0Z"/>
										</svg>
									</a>
								</li>
							<?php endif; ?>

							<?php if(get_field('instagram', 'options')) : ?>
								<li>
									<a href="<?php echo get_field('instagram', 'options'); ?>" target="_blank"">
										<svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill-rule="evenodd">
										    <path d="M 12 0C 8.741 0 8.33234 0.0138139 7.05246 0.0722133C 5.77516 0.13047 4.90288 0.333343 4.13954 0.629961C 3.35044 0.936629 2.68123 1.34695 2.01411 2.01406C 1.347 2.68123 0.936676 3.35044 0.630008 4.13954C 0.333343 4.90283 0.130517 5.77516 0.0722133 7.05242C 0.0138139 8.33234 0 8.741 0 12C 0 15.259 0.0138139 15.6677 0.0722133 16.9476C 0.130517 18.2248 0.333343 19.0972 0.630008 19.8605C 0.936676 20.6496 1.347 21.3188 2.01411 21.9859C 2.68123 22.653 3.35044 23.0634 4.13954 23.37C 4.90288 23.6667 5.77516 23.8695 7.05246 23.9278C 8.33234 23.9862 8.741 24 12 24C 15.2591 24 15.6677 23.9862 16.9476 23.9278C 18.2249 23.8695 19.0972 23.6667 19.8605 23.37C 20.6496 23.0634 21.3188 22.653 21.9859 21.9859C 22.653 21.3188 23.0634 20.6496 23.37 19.8605C 23.6667 19.0972 23.8695 18.2248 23.9278 16.9476C 23.9862 15.6677 24 15.259 24 12C 24 8.741 23.9862 8.33234 23.9278 7.05242C 23.8695 5.77516 23.6667 4.90283 23.37 4.13954C 23.0634 3.35044 22.653 2.68123 21.9859 2.01406C 21.3188 1.34695 20.6496 0.936629 19.8605 0.629961C 19.0972 0.333343 18.2249 0.13047 16.9476 0.0722133C 15.6677 0.0138139 15.2591 0 12 0ZM 11.9999 2.16217C 15.2041 2.16217 15.5836 2.17441 16.8489 2.23214C 18.0189 2.2855 18.6543 2.48099 19.0772 2.64532C 19.6373 2.86301 20.0371 3.12304 20.457 3.54299C 20.8769 3.96288 21.137 4.36263 21.3546 4.92276C 21.5189 5.3456 21.7144 5.98099 21.7678 7.15098C 21.8256 8.41633 21.8377 8.79588 21.8377 12C 21.8377 15.2041 21.8256 15.5837 21.7678 16.849C 21.7144 18.019 21.5189 18.6544 21.3546 19.0773C 21.137 19.6374 20.8769 20.0371 20.457 20.457C 20.0371 20.877 19.6373 21.137 19.0772 21.3547C 18.6543 21.519 18.0189 21.7145 16.8489 21.7679C 15.5838 21.8256 15.2043 21.8379 11.9999 21.8379C 8.79558 21.8379 8.41608 21.8256 7.15092 21.7679C 5.98093 21.7145 5.34549 21.519 4.92265 21.3547C 4.36257 21.137 3.96277 20.877 3.54288 20.457C 3.12298 20.0371 2.8629 19.6374 2.64521 19.0773C 2.48092 18.6544 2.28543 18.019 2.23204 16.849C 2.1743 15.5837 2.16211 15.2041 2.16211 12C 2.16211 8.79588 2.1743 8.41633 2.23204 7.15098C 2.28543 5.98099 2.48092 5.3456 2.64521 4.92276C 2.8629 4.36263 3.12298 3.96288 3.54288 3.54299C 3.96277 3.12304 4.36257 2.86301 4.92265 2.64532C 5.34549 2.48099 5.98093 2.2855 7.15087 2.23214C 8.41627 2.17441 8.79577 2.16217 11.9999 2.16217ZM 12 16C 9.7909 16 8 14.2091 8 12C 8 9.79085 9.7909 8 12 8C 14.2091 8 16 9.79085 16 12C 16 14.2091 14.2091 16 12 16ZM 12.0001 5.83783C 8.59681 5.83783 5.83789 8.5967 5.83789 12C 5.83789 15.4033 8.59681 18.1621 12.0001 18.1621C 15.4033 18.1621 18.1623 15.4033 18.1623 12C 18.1623 8.5967 15.4033 5.83783 12.0001 5.83783ZM 19.8456 5.5944C 19.8456 6.3897 19.2009 7.03438 18.4056 7.03438C 17.6103 7.03438 16.9656 6.3897 16.9656 5.5944C 16.9656 4.7991 17.6103 4.15442 18.4056 4.15442C 19.2009 4.15442 19.8456 4.7991 19.8456 5.5944Z"/>
										</svg>
									</a>
								</li>
							<?php endif; ?>

							<?php if(get_field('behance', 'options')) : ?>
								<li>
									<a href="<?php echo get_field('behance', 'options'); ?>" target="_blank"">
										<svg width="38" height="24" viewBox="0 0 38 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill-rule="evenodd">
										    <path id="path0_fill" fill-rule="evenodd" d="M 33.4003 12.9575C 33.318 11.7624 32.9242 10.8587 32.217 10.2389C 31.5161 9.61958 30.64 9.3078 29.5924 9.3078C 28.4545 9.3078 27.5763 9.64047 26.9514 10.2956C 26.3228 10.9465 25.9312 11.8336 25.7703 12.9575L 33.4003 12.9575ZM 37.8493 12.5097C 37.9649 13.294 38.0161 14.4324 37.9955 15.9227L 25.6651 15.9227C 25.7332 17.6487 26.3206 18.8584 27.4337 19.5489C 28.1061 19.9823 28.9205 20.1955 29.8747 20.1955C 30.8811 20.1955 31.7013 19.9362 32.3325 19.4069C 32.6766 19.1241 32.9796 18.7266 33.2435 18.2262L 37.7628 18.2262C 37.643 19.2478 37.0988 20.2812 36.1214 21.3338C 34.6062 23.0036 32.4808 23.8431 29.7512 23.8431C 27.4981 23.8431 25.5105 23.1359 23.7847 21.7276C 22.0657 20.3149 21.2039 18.0216 21.2039 14.8406C 21.2039 11.8589 21.9792 9.5757 23.5335 7.98734C 25.0941 6.39524 27.1102 5.604 29.5923 5.604C 31.0643 5.604 32.3922 5.86971 33.5754 6.40756C 34.7566 6.9454 35.7298 7.79074 36.4988 8.95214C 37.1938 9.97748 37.6409 11.1598 37.8493 12.5097ZM 14.396 16.4123C 14.396 15.1652 13.8952 14.3048 12.8934 13.8425C 12.3324 13.579 11.5408 13.445 10.5285 13.4343L 5.45288 13.4343L 5.45288 19.8317L 10.4504 19.8317C 11.4748 19.8317 12.2707 19.6956 12.8438 19.4106C 13.8788 18.8878 14.396 17.8914 14.396 16.4123ZM 5.45288 9.46263L 10.4562 9.46263C 11.4853 9.46263 12.3161 9.26388 12.9552 8.86639C 13.5964 8.47104 13.9136 7.76766 13.9136 6.75679C 13.9136 5.63932 13.4909 4.89898 12.6438 4.54274C 11.916 4.29631 10.984 4.16614 9.85452 4.16614L 5.45288 4.16614L 5.45288 9.46263ZM 18.4579 13.2399C 19.0722 14.2068 19.3794 15.3784 19.3794 16.7552C 19.3794 18.1807 19.0326 19.4567 18.328 20.5849C 17.8805 21.3317 17.3237 21.9617 16.656 22.47C 15.9034 23.0582 15.0104 23.46 13.986 23.6754C 12.9595 23.8913 11.8459 24 10.6484 24L 0 24L 0 0L 11.4195 0C 14.2974 0.0482132 16.3383 0.893551 17.5422 2.55691C 18.2658 3.57635 18.6246 4.79829 18.6246 6.22111C 18.6246 7.6884 18.2621 8.86212 17.5321 9.75353C 17.1258 10.2539 16.5257 10.7098 15.7303 11.1201C 16.9342 11.568 17.8472 12.2708 18.4579 13.2399ZM 24.7949 3.39633L 34.3176 3.39633L 34.3176 0.99585L 24.7949 0.99585L 24.7949 3.39633Z"/>
										</svg>
									</a>
								</li>
							<?php endif; ?>

							<?php if(get_field('vimeo', 'options')) : ?>
								<li>
									<a href="<?php echo get_field('vimeo', 'options'); ?>" target="_blank"">
										<svg width="28" height="24" viewBox="0 0 28 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill-rule="evenodd">
										    <path d="M 27.9865 5.55237C 27.8619 8.25322 25.9581 11.9516 22.2758 16.6454C 18.4692 21.5487 15.2483 24 12.6135 24C 10.982 24 9.60014 22.5077 8.47229 19.521C 7.71853 16.7839 6.9656 14.0465 6.21184 11.3094C 5.37407 8.32439 4.47555 6.8301 3.51486 6.8301C 3.30542 6.8301 2.57238 7.26681 1.31741 8.13691L 0 6.45515C 1.38181 5.25191 2.74486 4.04895 4.08635 2.84432C 5.92932 1.26613 7.31281 0.436184 8.23485 0.352553C 10.4141 0.145136 11.7553 1.62115 12.2588 4.78058C 12.8025 8.18953 13.1791 10.3099 13.3908 11.1399C 14.0189 13.9681 14.7099 15.3804 15.4651 15.3804C 16.0511 15.3804 16.9314 14.4633 18.1052 12.6289C 19.2776 10.794 19.9059 9.39803 19.9904 8.43904C 20.1576 6.85558 19.5293 6.06191 18.1052 6.06191C 17.4346 6.06191 16.7438 6.21478 16.0329 6.5169C 17.4088 2.05038 20.038 -0.118774 23.9189 0.00501188C 26.7959 0.0886432 28.1522 1.93767 27.9865 5.55237Z"/>
										</svg>
									</a>
								</li>
							<?php endif; ?>
						</ul>

						<hr class="d-sm-none">
					</address>

					<?php if(have_rows('lista_de_locais', 'options') ) : ?>
						<?php while(the_repeater_field('lista_de_locais', 'options')) : ?>
							<div class="sede col-12 col-sm-6 col-md-3 col-lg-2">
								<ul class="no-bullet">
									<li><?php echo get_sub_field('cidade'); ?></li>
									<li class="d-none d-lg-block"><?php echo get_sub_field('telefone'); ?></li>
									<li class="d-lg-none"><a href="tel:<?php echo get_sub_field('telefone_link'); ?>"><?php echo get_sub_field('telefone'); ?></a></li>
								</ul>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

					<div class="col-sm-12 col-md-12 col-lg-4 ml-auto d-md-none d-lg-block">
						<ul class="midias d-flex no-bullet">
							<?php if(get_field('facebook', 'options')) : ?>
								<li>
									<a href="<?php echo get_field('facebook', 'options'); ?>" target="_blank"">
										<svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill-rule="evenodd">
										    <path d="M 22.6754 0L 1.32457 0C 0.592954 0 0 0.592952 0 1.32457L 0 22.6753C 0 23.4069 0.592954 24 1.32457 24L 12.8192 24L 12.8192 14.7059L 9.69149 14.7059L 9.69149 11.0838L 12.8192 11.0838L 12.8192 8.41266C 12.8192 5.31283 14.7124 3.62489 17.4778 3.62489C 18.8024 3.62489 19.9409 3.72344 20.2726 3.7675L 20.2726 7.00707L 18.3547 7.00797C 16.8508 7.00797 16.5596 7.72259 16.5596 8.77127L 16.5596 11.0838L 20.1463 11.0838L 19.6794 14.7059L 16.5596 14.7059L 16.5596 24L 22.6754 24C 23.407 24 24 23.4069 24 22.6753L 24 1.32457C 24 0.592952 23.407 0 22.6754 0Z"/>
										</svg>
									</a>
								</li>
							<?php endif; ?>

							<?php if(get_field('instagram', 'options')) : ?>
								<li>
									<a href="<?php echo get_field('instagram', 'options'); ?>" target="_blank"">
										<svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill-rule="evenodd">
										    <path d="M 12 0C 8.741 0 8.33234 0.0138139 7.05246 0.0722133C 5.77516 0.13047 4.90288 0.333343 4.13954 0.629961C 3.35044 0.936629 2.68123 1.34695 2.01411 2.01406C 1.347 2.68123 0.936676 3.35044 0.630008 4.13954C 0.333343 4.90283 0.130517 5.77516 0.0722133 7.05242C 0.0138139 8.33234 0 8.741 0 12C 0 15.259 0.0138139 15.6677 0.0722133 16.9476C 0.130517 18.2248 0.333343 19.0972 0.630008 19.8605C 0.936676 20.6496 1.347 21.3188 2.01411 21.9859C 2.68123 22.653 3.35044 23.0634 4.13954 23.37C 4.90288 23.6667 5.77516 23.8695 7.05246 23.9278C 8.33234 23.9862 8.741 24 12 24C 15.2591 24 15.6677 23.9862 16.9476 23.9278C 18.2249 23.8695 19.0972 23.6667 19.8605 23.37C 20.6496 23.0634 21.3188 22.653 21.9859 21.9859C 22.653 21.3188 23.0634 20.6496 23.37 19.8605C 23.6667 19.0972 23.8695 18.2248 23.9278 16.9476C 23.9862 15.6677 24 15.259 24 12C 24 8.741 23.9862 8.33234 23.9278 7.05242C 23.8695 5.77516 23.6667 4.90283 23.37 4.13954C 23.0634 3.35044 22.653 2.68123 21.9859 2.01406C 21.3188 1.34695 20.6496 0.936629 19.8605 0.629961C 19.0972 0.333343 18.2249 0.13047 16.9476 0.0722133C 15.6677 0.0138139 15.2591 0 12 0ZM 11.9999 2.16217C 15.2041 2.16217 15.5836 2.17441 16.8489 2.23214C 18.0189 2.2855 18.6543 2.48099 19.0772 2.64532C 19.6373 2.86301 20.0371 3.12304 20.457 3.54299C 20.8769 3.96288 21.137 4.36263 21.3546 4.92276C 21.5189 5.3456 21.7144 5.98099 21.7678 7.15098C 21.8256 8.41633 21.8377 8.79588 21.8377 12C 21.8377 15.2041 21.8256 15.5837 21.7678 16.849C 21.7144 18.019 21.5189 18.6544 21.3546 19.0773C 21.137 19.6374 20.8769 20.0371 20.457 20.457C 20.0371 20.877 19.6373 21.137 19.0772 21.3547C 18.6543 21.519 18.0189 21.7145 16.8489 21.7679C 15.5838 21.8256 15.2043 21.8379 11.9999 21.8379C 8.79558 21.8379 8.41608 21.8256 7.15092 21.7679C 5.98093 21.7145 5.34549 21.519 4.92265 21.3547C 4.36257 21.137 3.96277 20.877 3.54288 20.457C 3.12298 20.0371 2.8629 19.6374 2.64521 19.0773C 2.48092 18.6544 2.28543 18.019 2.23204 16.849C 2.1743 15.5837 2.16211 15.2041 2.16211 12C 2.16211 8.79588 2.1743 8.41633 2.23204 7.15098C 2.28543 5.98099 2.48092 5.3456 2.64521 4.92276C 2.8629 4.36263 3.12298 3.96288 3.54288 3.54299C 3.96277 3.12304 4.36257 2.86301 4.92265 2.64532C 5.34549 2.48099 5.98093 2.2855 7.15087 2.23214C 8.41627 2.17441 8.79577 2.16217 11.9999 2.16217ZM 12 16C 9.7909 16 8 14.2091 8 12C 8 9.79085 9.7909 8 12 8C 14.2091 8 16 9.79085 16 12C 16 14.2091 14.2091 16 12 16ZM 12.0001 5.83783C 8.59681 5.83783 5.83789 8.5967 5.83789 12C 5.83789 15.4033 8.59681 18.1621 12.0001 18.1621C 15.4033 18.1621 18.1623 15.4033 18.1623 12C 18.1623 8.5967 15.4033 5.83783 12.0001 5.83783ZM 19.8456 5.5944C 19.8456 6.3897 19.2009 7.03438 18.4056 7.03438C 17.6103 7.03438 16.9656 6.3897 16.9656 5.5944C 16.9656 4.7991 17.6103 4.15442 18.4056 4.15442C 19.2009 4.15442 19.8456 4.7991 19.8456 5.5944Z"/>
										</svg>
									</a>
								</li>
							<?php endif; ?>

							<?php if(get_field('behance', 'options')) : ?>
								<li>
									<a href="<?php echo get_field('behance', 'options'); ?>" target="_blank"">
										<svg width="38" height="24" viewBox="0 0 38 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill-rule="evenodd">
										    <path id="path0_fill" fill-rule="evenodd" d="M 33.4003 12.9575C 33.318 11.7624 32.9242 10.8587 32.217 10.2389C 31.5161 9.61958 30.64 9.3078 29.5924 9.3078C 28.4545 9.3078 27.5763 9.64047 26.9514 10.2956C 26.3228 10.9465 25.9312 11.8336 25.7703 12.9575L 33.4003 12.9575ZM 37.8493 12.5097C 37.9649 13.294 38.0161 14.4324 37.9955 15.9227L 25.6651 15.9227C 25.7332 17.6487 26.3206 18.8584 27.4337 19.5489C 28.1061 19.9823 28.9205 20.1955 29.8747 20.1955C 30.8811 20.1955 31.7013 19.9362 32.3325 19.4069C 32.6766 19.1241 32.9796 18.7266 33.2435 18.2262L 37.7628 18.2262C 37.643 19.2478 37.0988 20.2812 36.1214 21.3338C 34.6062 23.0036 32.4808 23.8431 29.7512 23.8431C 27.4981 23.8431 25.5105 23.1359 23.7847 21.7276C 22.0657 20.3149 21.2039 18.0216 21.2039 14.8406C 21.2039 11.8589 21.9792 9.5757 23.5335 7.98734C 25.0941 6.39524 27.1102 5.604 29.5923 5.604C 31.0643 5.604 32.3922 5.86971 33.5754 6.40756C 34.7566 6.9454 35.7298 7.79074 36.4988 8.95214C 37.1938 9.97748 37.6409 11.1598 37.8493 12.5097ZM 14.396 16.4123C 14.396 15.1652 13.8952 14.3048 12.8934 13.8425C 12.3324 13.579 11.5408 13.445 10.5285 13.4343L 5.45288 13.4343L 5.45288 19.8317L 10.4504 19.8317C 11.4748 19.8317 12.2707 19.6956 12.8438 19.4106C 13.8788 18.8878 14.396 17.8914 14.396 16.4123ZM 5.45288 9.46263L 10.4562 9.46263C 11.4853 9.46263 12.3161 9.26388 12.9552 8.86639C 13.5964 8.47104 13.9136 7.76766 13.9136 6.75679C 13.9136 5.63932 13.4909 4.89898 12.6438 4.54274C 11.916 4.29631 10.984 4.16614 9.85452 4.16614L 5.45288 4.16614L 5.45288 9.46263ZM 18.4579 13.2399C 19.0722 14.2068 19.3794 15.3784 19.3794 16.7552C 19.3794 18.1807 19.0326 19.4567 18.328 20.5849C 17.8805 21.3317 17.3237 21.9617 16.656 22.47C 15.9034 23.0582 15.0104 23.46 13.986 23.6754C 12.9595 23.8913 11.8459 24 10.6484 24L 0 24L 0 0L 11.4195 0C 14.2974 0.0482132 16.3383 0.893551 17.5422 2.55691C 18.2658 3.57635 18.6246 4.79829 18.6246 6.22111C 18.6246 7.6884 18.2621 8.86212 17.5321 9.75353C 17.1258 10.2539 16.5257 10.7098 15.7303 11.1201C 16.9342 11.568 17.8472 12.2708 18.4579 13.2399ZM 24.7949 3.39633L 34.3176 3.39633L 34.3176 0.99585L 24.7949 0.99585L 24.7949 3.39633Z"/>
										</svg>
									</a>
								</li>
							<?php endif; ?>

							<?php if(get_field('vimeo', 'options')) : ?>
								<li>
									<a href="<?php echo get_field('vimeo', 'options'); ?>" target="_blank"">
										<svg width="28" height="24" viewBox="0 0 28 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill-rule="evenodd">
										    <path d="M 27.9865 5.55237C 27.8619 8.25322 25.9581 11.9516 22.2758 16.6454C 18.4692 21.5487 15.2483 24 12.6135 24C 10.982 24 9.60014 22.5077 8.47229 19.521C 7.71853 16.7839 6.9656 14.0465 6.21184 11.3094C 5.37407 8.32439 4.47555 6.8301 3.51486 6.8301C 3.30542 6.8301 2.57238 7.26681 1.31741 8.13691L 0 6.45515C 1.38181 5.25191 2.74486 4.04895 4.08635 2.84432C 5.92932 1.26613 7.31281 0.436184 8.23485 0.352553C 10.4141 0.145136 11.7553 1.62115 12.2588 4.78058C 12.8025 8.18953 13.1791 10.3099 13.3908 11.1399C 14.0189 13.9681 14.7099 15.3804 15.4651 15.3804C 16.0511 15.3804 16.9314 14.4633 18.1052 12.6289C 19.2776 10.794 19.9059 9.39803 19.9904 8.43904C 20.1576 6.85558 19.5293 6.06191 18.1052 6.06191C 17.4346 6.06191 16.7438 6.21478 16.0329 6.5169C 17.4088 2.05038 20.038 -0.118774 23.9189 0.00501188C 26.7959 0.0886432 28.1522 1.93767 27.9865 5.55237Z"/>
										</svg>
									</a>
								</li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
		
	<script>
		$(document).ready(function(){
			headerHeight = $('header').outerHeight();

			var lastScrollTop = 0;
			$(window).scroll(function(event){
				if ($(window).scrollTop() > headerHeight) {
					var st = $(this).scrollTop();
					if (st > lastScrollTop){
						if ($('header').hasClass('hidden-menu') == false) {
							$('header').addClass('hidden-menu');
							$('header').css('transform', 'translateY(-' + headerHeight + 'px)');
						}
					} else {
						if ($('header').hasClass('hidden-menu')) {
				    		$('header').removeClass('hidden-menu');
				    		$('header').css('transform', 'translateY(-' + 0 + 'px)');
				    	}
					}
					lastScrollTop = st;
				}
			});
				
			var src;
			var resolutionX = 8;
			var resolutionY = 8;
			var width = window.innerWidth / resolutionX;
			var height = window.innerHeight / resolutionY;

			$('body').mousemove(function(e) {
				if ( src != "<?php echo get_template_directory_uri(); ?>/favicon_ani/favicon_" + (Math.floor(e.clientX / width) + 1) + "_" + (Math.floor(e.clientY / height) + 1) + ".png") {
			    	src = "<?php echo get_template_directory_uri(); ?>/favicon_ani/favicon_" + (Math.floor(e.clientX / width) + 1) + "_" + (Math.floor(e.clientY / height) + 1) + ".png"
			    	$('link[rel="icon"]').attr('href', src);
			    }
			});

			$( window ).resize(function() {
				width = window.innerWidth / resolutionX;
				height = window.innerHeight / resolutionY;
			});
				
			var header_height = $('header').outerHeight();
			$('a[href="#contato"]').click(function(event){     
			    event.preventDefault();
			    $('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000);
			});
				
			var scrollTop = $(window).scrollTop();
			var limit = window.innerHeight;

			$('.fade-in').each(function() {
			    if (($(this).offset().top - scrollTop) >= limit ) {
			    	$(this).addClass('fade-hide');
			    }
			});

			var hiddenElements = $('.fade-in.fade-hide');

			$(window).scroll(function() {
				scrollTop = $(window).scrollTop();
				hiddenElements.each(function() {
					if (($(this).offset().top - scrollTop) < limit ) {
				    	$(this).removeClass('fade-hide');
				    }
				});
			});

			var $yVideos = $("iframe[src^='//www.youtube.com']"),
			$vVideos = $("iframe[src^='https://player.vimeo.com']"),
		    $fluidEl = $(".video-container"),
		    coverContainer = $("#capa-home"),
			coverHome = $("#capa-home video");

			// Figure out and save aspect ratio for each video
			$vVideos.each(function() {
				$(this)
					.data('aspectRatio', this.height / this.width)
					.removeAttr('height')
					.removeAttr('width');
			});

			if ( coverHome ) {
				var cover_ratio = coverHome.height / coverHome.width;
			}

			$(window).resize(function() {
				if ( coverHome ) {
					var coverWidth = coverContainer.width();
					coverHome.width(coverWidth).height(coverWidth * cover_ratio);
				}

				var newWidth = $fluidEl.width();
				$vVideos.each(function() {
					var $el = $(this);
					$el
						.width(newWidth)
						.height(newWidth * $el.data('aspectRatio'));
				});

			}).resize();
		});
			
		function grad(ev, ob){
			conteudo = $(ob).find('.conteudo');
			gradiente = "radial-gradient("+ (conteudo.outerWidth() + conteudo.outerHeight()) * 0.75 + "px at " + ev.offsetX + "px " + ev.offsetY + "px, rgba(227, 28, 121, 0.85) 0%, rgba(0, 40, 85, 0.85) 100%)";
			conteudo.css("background-image", gradiente);
		}
		
		var dropdownHeight;
		var scrollTop;
		var menu;
		var toHide;
		var toShow;

		<?php if(is_front_page()) : ?>
			$(document).ready(function(){
				sessionStorage.setItem('categoria', '');
				console.log("hey");
				$('#filtros ul li').click(function() {
					var filterValue = $( this ).attr('data-filter');
					console.log(filterValue);
					sessionStorage.setItem('categoria', filterValue);
					window.location = '<?php echo get_bloginfo('url'); ?>/trabalhos/?categoria=' + filterValue;
				});
			});
		<?php endif; ?>

		<?php if(is_page(46)) : ?>
			$(document).ready(function(){
				$(".filter-item").on("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function(){
					if ($(this).hasClass('hide')) {
						$(this).removeClass('hide');
						$(this).addClass('hidden');
					}
					if ($(this).hasClass('show')) {
						$(this).removeClass('show');
						$(this).addClass('shown');
					}
				});


				$("#filtros .filter").click(function(){

					if ( $(this).attr('data-filter') == 'todos') {

						$('.filter-item.descricao').removeClass('shown').removeClass('hidden').addClass('hide').removeClass('fade-hide');
						$('.filter-item:not(.descricao)').removeClass('shown').removeClass('hidden').addClass('show').removeClass('fade-hide');
						$('.filter').removeClass('is-checked');
						$(this).addClass('is-checked');

						$('.dropdown').find('.filtro-aplicado').removeClass('show');
						$('.dropdown').find('.chamada-filtro').addClass('show');

					} else {

						toHide = $('.filter-item:not([data-category~=' + $(this).attr('data-filter') + '])');
						toShow = $('.filter-item[data-category~=' + $(this).attr('data-filter') + ']');
						toHide.removeClass('shown').removeClass('hidden').addClass('hide').removeClass('fade-hide');
						toShow.removeClass('shown').removeClass('hidden').addClass('show').removeClass('fade-hide');

						$('#filtros .filter').removeClass('is-checked');
						$(this).addClass('is-checked');

						$('.dropdown').find('.chamada-filtro').removeClass('show');
						$('.dropdown').find('.filtro-aplicado').addClass('show').text($('.dropdown-menu').find('.is-checked').text().trim());

					}

				});

				if (sessionStorage.getItem('categoria') !== '' && sessionStorage.getItem('categoria') !== null) {
					var $filter = sessionStorage.getItem('categoria');
					var currentFilter = $("#filtros li[data-filter='" + $filter + "']");
					$('.filter').removeClass('is-checked');
					$(currentFilter).addClass('is-checked');
					$('.dropdown').find('.chamada-filtro').removeClass('show');
					$('.dropdown').find('.filtro-aplicado').addClass('show').text($('.dropdown-menu').find('.is-checked').text().trim());
					$('html,body').animate({scrollTop:$("#dropdownMenuButton").offset().top}, 500);

					toHide = $('.filter-item:not([data-category~=' + sessionStorage.getItem('categoria') + '])');
					toShow = $('.filter-item[data-category~=' + sessionStorage.getItem('categoria') + ']');
					toHide.removeClass('shown').removeClass('hidden').addClass('hide').removeClass('fade-hide');
					toShow.removeClass('shown').removeClass('hidden').addClass('show').removeClass('fade-hide');

				} else {
					$("#filtros li[data-filter='todos']").addClass('is-checked');
				}
				sessionStorage.setItem('categoria', '');
			});
		<?php endif; ?>

		$("#dropdownMenuButton").click(function(){
			if ( $(this).attr("aria-expanded") == "false" ) {
				$('html,body').animate({scrollTop:$(this).offset().top}, 500);
			}
		});

		$('.dropdown')
		.on('show.bs.dropdown', function () {
			$(this).find('.dropdown-menu').css('height', 'auto');
			dropdownHeight = $(this).find('.dropdown-menu').outerHeight();
			$(this).find('.dropdown-menu').css('height', '0');
			$('.dropdown').find('.filtro-aplicado').removeClass('show');
			$('.dropdown').find('.chamada-filtro').addClass('show');
		})
		.on('shown.bs.dropdown', function () {
			menu = $(this).find('.dropdown-menu');
			menu.css('opacity', '1');
			menu.css('height', dropdownHeight);
		})
		.on('hide.bs.dropdown', function () {
			menu = $(this).find('.dropdown-menu');
			menu.css('height', '0');
		})
		.on('hidden.bs.dropdown', function () {
			menu = $(this).find('.dropdown-menu');
			menu.css('opacity', '0');
		})
			
			
		var filterOffset;
		var scrollTop;
		$(document).ready(function(){
			var headerHeight = $('header').outerHeight();
			filterOffset = $('#filtros').offset().top;
			scrollTop = $(window).scrollTop();
			if ((filterOffset - scrollTop) < headerHeight) {
				$('header').addClass('solid');
			}
			$(window).scroll(function() {
				filterOffset = $('#filtros').offset().top;
				scrollTop = $(window).scrollTop();
					if ((filterOffset - scrollTop) < headerHeight) {
						$('header').addClass('solid');
					} else {
						$('header').removeClass('solid');
					}
			});
		})


		$('#menu-mobile').on('show.bs.collapse', function () {
			$('header').addClass('solid');
		});

		$('#menu-mobile').on('hidden.bs.collapse', function () {
			$('header').removeClass('solid');
		});

		$(window).scroll(function(){
			if ( $('#menu-button').hasClass( 'collapsed' ) == false ) {
				$('#menu-mobile').collapse('hide');
			}
		});
	</script>
	
	</body>
</html>