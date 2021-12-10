
    

<h1>Data Nilai</h1>
            <div class="table-responsive">

                <?php
                $connection = mysqli_connect("localhost", "root", "", "user_level");
                $query = "SELECT *FROM karya ORDER BY nilai desc";
                $query_run = mysqli_query($connection, $query);
                ?>
                <table border="1">
                    <thead>
                        <tr>
                            <th >No</th>
                            <th > Nama </th>
                            <th > Nilai juri 1</th>
                            <th >nilai juri 2</th>
                            <th >Total Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($query_run) > 0) {
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($query_run)) :
                        ?>
                                <tr>

                                    <td><?php echo $no; ?></td>
                                    <td ><?php echo $row['nama']; ?></td>
                                    <td ><?php echo $row['nilai']; ?></td>
                                    <td ><?php echo $row['nilai_2']; ?></td>
                                    <td > </td>

                                     
                                </tr>

                        <?php
                                $no++;
                            endwhile;
                        } else {
                            echo "No Record Found";
                        }
                        ?>  

                    </tbody>
                </table>

