<?php
            function main_link($main_link = true)
            {
                if (($main_link) or is_null($main_link)) return 'href="/"';
                    else return '';
            }
?>