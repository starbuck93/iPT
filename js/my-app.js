// Initialize your app
var myApp = new Framework7({
    animateNavBackIcon:true,
    // swipePanel: 'left'
});

// Export selectors engine
var $$ = Dom7;

// Add main View
var mainView = myApp.addView('.view-main', {
    // Enable dynamic Navbar
    dynamicNavbar: true,
    // Enable Dom Cache so we can use all inline pages
    domCache: true
});

var monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August' , 'September' , 'October', 'November', 'December'];

var calendarDateFormat = myApp.calendar({
    input: '#calendar-date-format',
    dateFormat: 'D, M d, yyyy',
    value: [new Date()],
	weekHeader: false,
	firstDay: 0,
    toolbarTemplate: 
        '<div class="toolbar calendar-custom-toolbar">' +
            '<div class="toolbar-inner">' +
                '<div class="left">' +
                    '<a href="#" class="link icon-only"><i class="icon icon-back"></i></a>' +
                '</div>' +
                '<div class="center">' +
                    '<a href="#" class="link">Done</a>' +
                '</div>' +
                '<div class="right">' +
                    '<a href="#" class="link icon-only"><i class="icon icon-forward"></i></a>' +
                '</div>' +
            '</div>' +
        '</div>',
    onOpen: function (p) {
        $$('.calendar-custom-toolbar .center .link').on('click', function () {
            calendarDateFormat.close();
        });
        $$('.calendar-custom-toolbar .left .link').on('click', function () {
            calendarDateFormat.prevMonth();
        });
        $$('.calendar-custom-toolbar .right .link').on('click', function () {
            calendarDateFormat.nextMonth();
        });
    },
});

// if (!myApp.device.webView) {
// 	myApp.alert('Add this app to your homescreen!','Yo!');
// };
