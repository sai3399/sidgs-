
0) and ($len_cat_tl > 0) and ($len_cat_de > 0)){ $sql = "insert into categories (category_id, title, description)"; $sql .= " values ('$Cat_ID', '$Cat_Title', '$Cat_Desc')"; $result = $db->query($sql); $db->commit( ); } else { echo "

Please make sure all fields are filled in "; echo "and try again.
\n"; } } docstore.mik.ua/orelly/webprog/php/ch08_05.htm
