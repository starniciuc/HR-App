<?php
require_once('conn.php');
$nameCat=$_POST['name'];
$cat=$_POST['cat'];
if(isset($nameCat) && isset($cat)){
  if(!empty($nameCat) && !empty($cat)) {

      if($cat==='1'){
      /**query sql for selecting a records of interns by seeking a name of employee*/
        $sql="SELECT e.empno, e.ename, e.job, e.hiredate, e.comm, e.sal, d.deptname FROM emp AS e, dept AS d
        WHERE e.ename LIKE '%$nameCat%' and e.deptno = d.deptno";
        $stmt=$conn->prepare($sql);
        #$stmt->bindParam(':ename',$nameCat);
        $stmt->execute();
        echo("<tr><th>ID</th><th>FULL NAME</th><th>JOB</th><th>HIRE DATE</th><th>COMM</th><th>SALARY</th><th>DEPARTEMENT NAME</th></tr>");
        while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
          echo("<tr><td>".$result['empno']."</td>");
          echo("<td>".$result['ename']."</td>");
          echo("<td>".$result['job']."</td>");
          echo("<td>".$result['hiredate']."</td>");
          echo("<td>".$result['comm']."</td>");
          echo("<td>".$result['sal']."</td>");
          echo("<td>".$result['deptname']."</td>");
          echo('<td><a href="editemp.php?id='.$result['empno'].'"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span> Edit</button></a></td>');
          echo('<td><a href="delemp.php?id='.$result['empno'].'"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</button></a></td></tr>');
        }
        }
      else{
        /**query sql for selecting a records of interns by seeking a name of interns*/
        $sql="SELECT i.internid,i.intername,i.college,i.datefrom,i.dateto,i.job,d.deptname FROM interns as i ,dept as d
        where i.intername LIKE'%$nameCat%' and
        i.deptno=d.deptno";
        $stmt=$conn->prepare($sql);
        $stmt->execute();
        echo("<tr><th>ID</th><th>FULL NAME</th><th>COLLEGE</th><th>FROM DATE</th><th>TO DATE</th><th>JOB</th><th>DEPARTMENT NAME</th><tr>");
        while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
          echo("<tr><td>".$result['internid']."</td>");
          echo("<td>".$result['intername']."</td>");
          echo("<td>".$result['college']."</td>");
          echo("<td>".$result['datefrom']."</td>");
          echo("<td>".$result['dateto']."</td>");
          echo("<td>".$result['job']."</td>");
          echo("<td>".$result['deptname']."</td>");
          echo('<td><a href="edintern.php?id='.$result['internid'].'"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span> Edit</button></a></td>
          <td><a href="delintern.php?id='.$result['internid'].'"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</button></a></td>');
        }
      }
      #echo($cat);

    }
  }



?>
