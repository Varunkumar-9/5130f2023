<%@ include file="aheader.jsp"%>
<%@ page  import="java.sql.*" import="databaseconnection.*"%>
  <section class="inner-page-banner bg_img overlay-3" data-background="assets/images/inner-page-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        
          <ol class="page-list">
            <li><a href="#"><i class="fa fa-home"></i> Rental Locaitons</a></li>
            <li></li>
          </ol>
        </div>
      </div>
    </div>
  </section>

<br><br><br><br><br><br><br><br><br>
 <%! 
 Connection con=null;
		Statement st=null;
		ResultSet rs=null;
 %>
          <%
     String id=request.getParameter("msg");
     if(id!=null )
     {
     out.println("<Script>alert('Car Booked Successfully')</script>");
     }
	  
		%>
  <section class="search-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="car-search-area">
            <h3 class="title">View Rental Locaitons</h3>
  


			<div class="row">
                <div class="col-lg-12 form-group">



				  <table bgcolor="" cellpadding="5" cellspacing="5" width="825" border="0" align="center">
            <tr  bgcolor="#6ce1a2"> 
            <tr bgcolor="#6ce1a2"> 
              <td align="center"><font color="#110022"><strong><font size="" color="#fff">Rental_location_ID</font></strong></font></td>
              <td align="center"><font color="#110022"><strong><font size="" color="#fff">Street_name</font></strong></font></td>
              <td align="center"> <font color="#110022"><strong><font size="" color="#fff">State</strong></font></td>
              <td align="center"><font color="#110022"><strong><font size="" color="#fff">Zipcode</strong></font></td>


              <td align="center"> <font color="#110022"><strong><font size="" color="#fff">Email</strong></font></td>
			  <td align="center"> <font color="#110022"><strong><font size="" color="#fff">Phone_No</strong></font></td>
			  		  
			  
			  		  
            </tr>
  
                 
                </div>
				</div>
	
				
             
          
            <%
			
			


ResultSet rs=null;

try
{
	Connection con = databasecon.getconnection();
	Statement st = con.createStatement();	

    String qry="select * from rental_location  ";

		rs =st.executeQuery(qry);
		String owner=null,name=null,fid=null;
	int sno=0;
	while(rs.next())
	{
	sno++;

	


	
	 
%>
            <tr bgcolor="#d2d2d2"> 
              <td align="center"> <strong><font size="3" color="#6300C6"> <%=rs.getInt(1)%> </font></strong></td>
               <td align="center"> <strong><font size="3" color="#6300C6"> <%=rs.getString(2)%> </font></strong></td>
              
              <td align="center"><strong><font size="3" color="#6300C6"> <%=rs.getString(3)%> </font></strong></td>
			  <td align="center"><strong><font size="3" color="#6300C6"> <%=rs.getString(4)%> </font></strong></td>
			  <td align="center"><strong><font size="3" color="#6300C6"> <%=rs.getString(5)%> </font></strong></td>
			  <td align="center"><strong><font size="3" color="#6300C6"> <%=rs.getString(6)%> </font></strong></td>
			 
				
				 
            </tr>
            <%
	   }
	   }
	   catch(Exception e1)
	   {
	     out.println(e1);

	   }
 %>
          </table>
              
             
          
          </div>
        </div>
      </div>
    </div>
  </section>
<br><br><br><br><br><br><br><br><br><br><br>

<%@ include file="footer.jsp"%>