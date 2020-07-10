<footer>
    <div class="container">
        <div class="row">
            <div class="col-md">
                <?php
                    echo ('(C) ' . date('Y') . ' ' . $FNAME . ' ' . $LNAME);
                ?>
            </div>
            <div class="col-md"></div>
            <div class="col-md">
                <?php
                echo ($EMAIL_ADDR . ' ( SN# ' . $STUDENT_ID . ')' );
                ?>
            </div>
        </div>
    </div>
</footer>