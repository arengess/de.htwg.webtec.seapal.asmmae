package backend;

import java.sql.*;

public class DBAccess {

	public Connection getConnection() throws SQLException, ClassNotFoundException {
		Class.forName("com.mysql.jdbc.Driver");
	    Connection connection = DriverManager.getConnection(
	        "jdbc:mysql://localhost/seapal", "root", "WebTech");
		return connection;
	}
}
