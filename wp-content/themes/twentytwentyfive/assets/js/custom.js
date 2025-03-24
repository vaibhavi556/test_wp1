jQuery(document).ready(function($) {
    var ajaxUrl = my_ajax_object.ajax_url;

  $('#contact-form').submit(function(e) {
    e.preventDefault();

    var formData = {
      'name': $('#name').val(),
      'email': $('#email').val(),
      'company': $('#company').val(),
      'job-title': $('#job-title').val(),
      'phone': $('#phone').val(),
      'nric': $('#nric').val(),
      'enquiry': $('#enquiry').val(),
      'contact-method': $('input[name="contact-method"]:checked').map(function() { return this.value; }).get(),
      'personal-data-policy': $('#personal-data-policy').is(':checked') ? '1' : '0',
    };

    $.ajax({
      type: 'POST',
      url: ajaxUrl,
      data: {
        action: 'submit_contact_form',
        form_data: formData
      },
      success: function(response) {
        $('#form-response').html(response);
      }
    });
  });
});
