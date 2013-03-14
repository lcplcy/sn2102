<?php
# This function reads your DATABASE_URL configuration automatically set by Heroku
# the return value is a string that will work with pg_connect
function pg_connection_string() {
  return "dbname=dcmnp0r7gqo428 host=ec2-54-243-39-42.compute-1.amazonaws.com port=5432 user=xcltjptyzxhxne password=XkjS3U0aTZhMXmOdRb82B8GGDe sslmode=require";
}
 
# Establish db connection
$db = pg_connect(pg_connection_string());
if (!$db) {
   echo "Database connection error."
   exit;
}
 
$result = pg_query($db, "SELECT statement goes here");
?>