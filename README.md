# PHP date() function Incorrect Output
This repository demonstrates a bug in PHP's date() function where incorrect day names are output when used with strtotime() for certain date formats.  The bug is related to how strtotime() handles dates and the date() function's interpretation of them.

## Bug Description
The `date()` function, when used with `strtotime()` to parse dates, produces unexpected results. For example, providing '2024-03-10' results in an incorrect day name.

## Solution
The solution involves using the DateTime object for more reliable date parsing and formatting.