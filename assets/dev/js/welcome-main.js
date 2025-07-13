;(function($) {

	$(window).load(function() {
		const bodyBg = $('.body-bg-image');
		const profileImage = $('.profile-image');
		const mainMenu = $('.main-menu');
		const mainMenuNav = $('.main-menu nav');

		mainMenu.removeClass('hide');
		console.log(window.innerHeight);

		// images lazy loading
		setTimeout(function() {
			bodyBg.css("background-image", "url(" + bodyBg.attr('data-lazy') +")");

			profileImage.css('border-radius', '30%');
			mainMenuNav.addClass('menu-scale');
		}, 5)

		setTimeout(function() {
			profileImage.css('border-radius', '50%');
			mainMenuNav.removeClass('menu-scale');
			mainMenuNav.removeClass('bottom-transition');

			let innerHeightPercentage = window.innerHeight * 0.03;
			if (innerHeightPercentage > 30) {
				innerHeightPercentage = 32;
			}
			
			mainMenuNav.css('bottom', innerHeightPercentage + 'vh');
		}, 400);
	});

	$(document).ready(function() {
		const contentInput = $('.content-wrapper');
		const navListItem = $('.main-menu__item')
		const navTitle = $('.nav-title');
        const contextMenu = $('.context-menu');

        document.oncontextmenu = function(e) {
            e.preventDefault();

            const x = e.pageX;
            const y = e.pageY;
            contextMenu.addClass('show');

            contextMenu.css('top', y + 5 + 'px');
            contextMenu.css('left', x + 5 + 'px');
			contextMenu.css('right', 'auto');
			contextMenu.css('bottom', 'auto');
			if ((window.innerWidth - x) <= 255) {
				contextMenu.css('left', 'auto');
				contextMenu.css('right', '20px');
			}
			if ((window.innerHeight - y) <= 210) {
				contextMenu.css('top', 'auto');
				contextMenu.css('bottom', '20px');
			}
        }

        // document click remove context menu
        $(document).click(function() {
            contextMenu.removeClass('show');
        });
		
		$(navListItem).hover(function () {
            const item = $(this);
			if ($(window).width() < 650) return;

			$(item.children('.main-menu__item-caption')).html(item.data('title'))
			$(item.children('.main-menu__item-caption')).addClass('show')
		}, function() {
			const item = $(this);
			if ($(window).width() < 650) return;

			$(item.children('.main-menu__item-caption')).removeClass('show')
		})

		// menu click
		$(document).on('click', ".main-menu__item, .context-menu__item", function() {
			$(navListItem).removeClass('active');
			$(this).addClass('active');

            if ($('.context-menu').hasClass('show')) {
                $('.context-menu').removeClass('show');
            }

			contentInput.removeClass('show-content');
			const listData = $(this).data('title');

			// header menu title
			$('.header-menu .section-title').html(listData)

			contentInput.each( function(key, input) {
				if (listData == $(this).data('title')) {
					$('.about').css('visibility', 'hidden');
					$(this).addClass('show-content');
					contentClose();
				}
				
				if (listData == 'About') {
					skillsAnimation();
				}
				if (listData == 'Projects') {
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
				$('.header-menu .section-title').html('');
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
			const socialIconList = $('#contact-social-media li');
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

		console.log(" %c Hey, What's up...!!! ", 'background: #ffff00')
	})

})( jQuery );
