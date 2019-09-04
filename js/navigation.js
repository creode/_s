var creodeHeaderNavigation = {

	elements: {},

	init: function() {
		this.getElements();
		if(this.elements.toggles.length) {
			this.setToggleEvents();
		}
	},

		getElements: function() {
			this.elements.toggles = jQuery('.header__navigation-toggle');
		},

		setToggleEvents: function() {
			var _self = this;

			_self.elements.toggles.on('click', function() {
				var toggle = jQuery(this);

				_self.toggle(toggle);
			});

            _self.elements.toggles.on('open', function() {
                var toggle = jQuery(this);

                _self.open(toggle);
            });

            _self.elements.toggles.on('close', function() {
                var toggle = jQuery(this);

                _self.close(toggle);
            });
		},

		toggle: function(toggleButton) {
			var navigation = toggleButton.parent().children('.header__navigation');

			if(navigation.length) {
				toggleButton.toggleClass('header__navigation-toggle--open');
				if(toggleButton.hasClass('header__navigation-toggle--open')) {
					navigation.addClass('header__navigation--open');
					toggleButton.trigger('toggled-opened');
				} else {
					navigation.removeClass('header__navigation--open');
					toggleButton.trigger('toggled-closed');
				}
				toggleButton.trigger('toggled');
			}
		},

        open: function(toggleButton) {
            if(!toggleButton.hasClass('header__navigation-toggle--open')) {
                this.toggle(toggleButton);
            }
        },

        close: function(toggleButton) {
            if(toggleButton.hasClass('header__navigation-toggle--open')) {
                this.toggle(toggleButton);
            }
        }

};

jQuery(document).on('ready', function() {
	creodeHeaderNavigation.init();
});