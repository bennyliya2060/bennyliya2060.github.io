/*--js class--*/
class leora {
    static getLoginDetails() {
        var loginDetails = {
            1001: { userid: 101, password: "leora"}
        }
        return loginDetails
    }
    /*--login function and--*/
    static login() {
        var userid = document.querySelector("#usr").value;
        var password = document.querySelector("#pwd").value
        try {
            if (isNaN(userid)) throw "Not a valid userid";
        }
        catch (err) {
            alert(err)
        }    
        let data = leora.getLoginDetails()
        if (userid in data) {
            let pwd = data[userid].password
            if (pwd == password) {
                alert("Successfull login");
                window.location="Admin_home.html";
            }
            else {
                alert("Incorrect Username or Password");
            }
        }
        else {
            alert("User doesnot exist");
        }
    }   
}
