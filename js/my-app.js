// Initialize your app
var myApp = new Framework7({
    animateNavBackIcon:true,
    swipePanel: 'left'
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

var calendarDateFormat = myApp.calendar({
    input: '#calendar-date-format',
    dateFormat: 'DD, MM dd, yyyy'
});

// if (!myApp.device.webView) {
// 	myApp.alert('Add this app to your homescreen! This message will not stop appearing until you do.','Yo!');
// };