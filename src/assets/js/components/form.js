// Validate the form
function form() {


    // Define Variables
    let id = (id) => document.getElementById(id);
    let classes = (classes) => document.getElementsByClassName(classes);
    let name = id("name"),
        email = id("email"),
        emailconfirm = id("emailconfirm"),
        phone = id("phone"),
        inquiry = id("inquiry"),
        selectBox = id("selectBox"),
        form = id("form"),
        errorMsg = classes("error");

    /**
     *
     * @param {String} email
     * @return {Boolean} 
     * @description Validate the email
     * 
     */
    function validateEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    /**
     * Validate Japanese phone number
     *
     * @param {String} phone
     * @return {Boolean}} 
     * @description Validate the phone number
     */
    function validatePhone(phone) {
        // const re = /^\d{10,11}$/;
        const re = /^[0-9]{2,4}(-)?[0-9]{2,4}(-)?[0-9]{3,4}$/;
        return re.test(String(phone));
    }


    /**
     *
     * @param {String} id
     * @param {String} serial
     * @param {String} message
     * @description Display the error message
     * 
     */
    let engine = (id, serial, message) => {

        validateEmail(id.value);
        if (id.value.trim() === "") {
            errorMsg[serial].classList.add("is-active");
            errorMsg[serial].innerHTML = message;
            id.focus();
            // id.style.border = "2px solid red";
            return false;
        } else if ((id.getAttribute("id") === "email" || id.getAttribute("type") === "email") && !validateEmail(id.value)) {
            errorMsg[serial].classList.add("is-active");
            errorMsg[serial].innerHTML = "メールアドレスの形式が正しくありません。";
            id.focus();
            // id.style.border = "2px solid red";
            return false;
        } else if ((id.getAttribute("id") === "emailconfirm" || id.getAttribute("type") === "email")) {
            if (email.value !== emailconfirm.value) {
                errorMsg[serial].classList.add("is-active");
                errorMsg[serial].innerHTML = "メールアドレスが一致しません。";
                id.focus();
                // id.style.border = "2px solid red";
                return false;
            } else {
                errorMsg[serial].innerHTML = "";
                // id.style.border = "2px solid green";
                return true;
            }
        } else if ((id.getAttribute("id") === "phone") && !validatePhone(id.value)) {
            errorMsg[serial].classList.add("is-active");
            errorMsg[serial].innerHTML = "電話番号を正しく入力してください。";
            id.focus();
            // id.style.border = "2px solid red";
            return false;
        } else {
            errorMsg[serial].classList.remove("is-active");
            errorMsg[serial].innerHTML = "";
            // id.style.border = "2px solid green";
            return true;
        }
    };
    // Check for the Form if its Exits
    if (form) {
        /**
         * @description Validate the form
         */
        form.addEventListener("submit", function (e) {
            // e.preventDefault();
            if (engine(name, 0, "") && engine(email, 1, "") && engine(inquiry, 2, "") && engine(selectBox, 3, "") && engine(phone, 4, "") && engine(emailconfirm, 5, "")) {
                form.submit;
                return true;
            } else {
                e.preventDefault();
                engine(inquiry, 5, "お問い合わせ内容を入力してください");
                engine(selectBox, 4, " お問い合わせの種類を選択してください");
                engine(phone, 3, " 電話番号を入力してください");
                engine(emailconfirm, 2, "メールアドレスを入力してください");
                engine(email, 1, "メールアドレスを入力してください");
                engine(name, 0, "お名前を入力してください");
                return false;
            }
        });
    }

}
export {
    form
};
