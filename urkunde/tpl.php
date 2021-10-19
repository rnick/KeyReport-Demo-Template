<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Urkunde</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="./css/urkunde.css" />

</head>

<body>
    <div class="content">
        <div class="uk_table">
            <div class="uk_row">
                <div class="uk_rlbs"><img src="./pix/rlbs.png" /></div>
                <div class="uk_feuerwehr"><img src="./pix/feuerwehr.png" /></div>
                <div class="uk_logo"><img src="./pix/logo.png" /></div>
            </div>
            <div style="clear: both;"></div>
            <div class="row">
                <div class="uk_title"><img src="./pix/titel.png" /></div>
            </div>
            <div style="clear: both;"></div>
            <div class="uk_row uk_row_text">
                <div class="uk_eiche"><img src="./pix/
<?php
echo htmlspecialchars($_GET["jahre"]);
?>
.png" /></div>
                <div class="uk_text">
                    In<br />
                    <span class="uk_highlight">Anerkennung und Dankbarkeit</span><br />für
                    <br />
                    <span class="uk_highlight"><span class="txt_jahre"><?php
                                                                        echo htmlspecialchars($_GET["jahre"]);
                                                                        ?></span> Jahre
                        Vereinszugehörigkeit</span><br /> verleihen wir<br />
                    <div class="uk_anrede"><span class=" txt_anrede"><?php
                                                                        echo htmlspecialchars($_GET["anrede"]);
                                                                        ?></span>&nbsp;<span
                            class="txt_name">
                            <?php
                                                                                                                echo htmlspecialchars($_GET["name"]);
                                                                                                                ?></span></div><br />
                    <span class="uk_highlight">diese Urkunde und die zugehörige Vereinsnadel.</span>
                </div>

            </div>
            <div style="clear: both;"></div>
            <div class="uk_row uk_foottext">
                Freiwillige Feuerwehr Musterstadt, <span class="txt_date"><?php
                                                                            echo htmlspecialchars($_GET["datum"]);
                                                                            ?></span>
            </div>
            <div style="clear: both;"></div>
            <div class="uk_row uk_signature">
                <?php
                echo htmlspecialchars($_GET["signatur"]);
                ?>, 1. Vorsitzender
            </div>
            <div style="clear: both;"></div>

            <div class="uk_bigred"></div>
            <div class="uk_smallred"></div>
        </div>
</body>

</html>