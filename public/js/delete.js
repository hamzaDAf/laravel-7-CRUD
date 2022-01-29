/**
 * Submit the delete form
 *
 * @param  HTMLElement  form
 * @return void
 */
function submitDeleteForm(form, product) {
    // console.log(form.id);
    if (confirm(`do you want delete this product:  ${product}`)) {
        document.getElementById(`${form.id}`).submit();
    }
}
