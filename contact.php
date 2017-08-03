<!DOCTYPE html>
<html>

    <?php include "head.html"; ?>

    <body>
        <?php include "nav.html"; ?>

        <!-- Change the width and height values to suit you best -->
        <div class="ui text container contact-us">
            <div class="ui horizontal divider">
                <h1>Contact Us</h1>
            </div>
            <p>You can contact us through <a href="mailto:scnogt@gmail.com">email</a>, our <a href = "https://www.facebook.com/SCNOGT/" target="_blank">Facebook</a> page, or the form below. </p>
            <form action="https://formspree.io/scnogt@gmail.com" method="POST" class="ui form" role="form">
                <div class="field">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="First & Last Name" />
                </div>
                <div class="field">
                    <label for="_replyto">Email</label>
                    <input type="text" id="_replyto" name="_replyto" placeholder="example@domain.com" />
                </div>
                <div class="field">
                    <label for="message">Message</label>
                    <textarea rows="4" name="message"></textarea>
                </div>
                <div class="button-container" style="text-align:center;">
                    <input id="submit" type="submit" value="Send" class="ui button">
                </div>
            </form>
        </div>
        <?php include "scripts.html"; ?>

    </body>

</html>
