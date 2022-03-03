;(function($) {

	$(window).load(function() {
		const bodyBg = $('.body-bg-image');
		const profileImage = $('.profile-image');
		const mainMenuNav = $('.main-menu nav');

		// images lazy loading
		setTimeout(function() {
			bodyBg.css("background-image", "url(" + bodyBg.attr('data-lazy') +")");

			profileImage.css('border-radius', '30%');
			mainMenuNav.addClass('menu-scale');
		}, 5)
		
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
        const contextMenu = $('.context-menu');

        document.oncontextmenu = function(e) {
            e.preventDefault();

            const x = e.pageX;
            const y = e.pageY;
            contextMenu.addClass('show');
            contextMenu.css('top', y + 5 + 'px');
            contextMenu.css('left', x + 5 + 'px');
        }
        // document click remove context menu
        $(document).click(function() {
            contextMenu.removeClass('show');
        });
		
		$(navListItem).hover(function () {
            const item = $(this);
            navListItem.each(function(index, el) {
                if ( item.data('title') == $(el).data('title') ) {
                    $(this).children().css({
                        'width': '86px',
                        'transform': 'scale(1.8) translateY(-15px)'
                    });

                    if ($(navListItem[index - 1])) {
                        $(navListItem[index - 1]).children().css({
                            'width': '68px',
                            'transform': 'scale(1.2) translateY(-10px)'
                        })
                    }
                    if ($(navListItem[index + 1])) {
                         $(navListItem[index + 1]).children().css({
                            'width': '68px',
                            'transform': 'scale(1.2) translateY(-10px)'
                        })
                    }
                }
            } )

            navTitle.html($(this).data('title'));
            setTimeout(function() {
                navTitle.addClass('show-title');
            }, 300)
		}, function() {

			navTitle.removeClass('show-title');
			navTitle.html('');
            navListItem.each(function(index, el) {
                $(navListItem[index]).children().css({
                    'width': '60px',
                    'transform': 'scale(1) translateY(1px)'
                });
            })
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

			contentInput.each( function(key, input) {
				if (listData == $(this).data('title')) {
					$('.about').css('visibility', 'hidden');
					$(this).addClass('show-content');
					contentClose();
				}
				
				if (listData == 'About & Skills') {
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
