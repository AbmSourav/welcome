;(function($) {

	$(window).load(function() {
		const bodyBg = $('.body-bg-image');
		const profileImage = $('.profile-image');
		const mainMenuNav = $('.main-menu nav');
		const hr = $('.hr');

		// images lazy loading
		setTimeout(function() {
			bodyBg.css("background-image", "url(" + bodyBg.attr('data-lazy') +")");
			profileImage.attr('src', profileImage.attr('data-lazy'))
		}, 20)
		profileImage.addClass('show')

		profileImage.css('border-radius', '30%');
		mainMenuNav.addClass('menu-scale');
		hr.css('height', '250px');		
		hr.css('opacity', '1');			
		
		setTimeout(function() {
			profileImage.css('border-radius', '50%');
			mainMenuNav.removeClass('menu-scale');
			
			hr.css('height', '');
			hr.css('opacity', '');
		}, 400);
	});
	
	$(document).ready(function() {
		const contentInput = $('.content-wrapper');
		const navListItem = $('.main-menu__item')
		const navTitle = $('.nav-title');
		
		$(navListItem).hover(function () {
			navTitle.addClass('show-title');
			navTitle.html('<h4>' + $(this).data('title') + '</h4>');
		}, function() {
			navTitle.removeClass('show-title');
			navTitle.html('');
		})

		// menu click
		$(navListItem).on('click', function() {
			$(navListItem).removeClass('active');
			$(this).addClass('active');

			contentInput.removeClass('show-content');
			const listData = $(this).data('title'); 

			contentInput.each( function(key, input) {
				if (listData == $(this).data('title')) {
					$('.about').css('visibility', 'hidden');
					$(this).addClass('show-content');
					contentClose();
				}
				
				if (listData == 'Skills') {
					skillsAnimation();
				}
				if (listData == 'Portfolio') {
					portfolioAnimation();
				}
				if (listData == 'Experience') {
					experienceAnimation();
				}
				if (listData == 'Resume') {
					ResumeAnimation();
				}
				if (listData == 'Contact') {
					contactSocialIconAnimation();
				}
			})
		});

		const contentClose = function() {
			const closeIcon = $('.content-close');

			$(closeIcon).on('click', function() {
				$('.about').css('visibility', 'visible');
				
				contentInput.removeClass('show-content');
				$(navListItem).removeClass('active');
			})
		}

		const skillsAnimation = function() {
			const professionalSkills = $('.professional-skills');
			const genarelSkills = $('.genarel-skills');

			$(professionalSkills).css('opacity', '1');
			$(genarelSkills).css('opacity', '1');
		}

		const portfolioAnimation = function() {
			const workCard = $('.work-card');

			workCard.each( function(key, icon) {
				setTimeout(() => {
					$(this).css('opacity', '1');
				}, key * 150);
			})
		}

		const experienceAnimation = function() {
			const jobDetail = $('.job-detail');

			jobDetail.each( function(key) {
				setTimeout(() => {
					$(this).css('opacity', '1');
				}, key * 250);
			})
		}

		const ResumeAnimation = function() {
			const resume = $('.resume-wrapper img');
			const resumeDownload = $('.resume-download');

			resume.css('opacity', '1');
			resumeDownload.css('transform', 'scale(1)');
		}

		const contactSocialIconAnimation = function() {
			const socialIconList = $('.social-media li');
			const contactDetail = $('.contact-detail');
			const blogDetail = $('.blog-detail');

			socialIconList.each( function(key, icon) {
				setTimeout(() => {
					$(this).css('transform', 'scale(1)');
				}, key * 350);
			})
			$(contactDetail).css('transform', 'scale(1) rotateY(0deg)');
			$(blogDetail).css('opacity', '1');
		}

	})

})( jQuery );
