package frontend;

import java.sql.SQLException;
import fassade.BootDTO;
import fassade.Fassade;



public class TestClient {

	/**
	 * @param args
	 * @throws SQLException
	 * @throws ClassNotFoundException
	 */
	public static void main(String[] args) throws ClassNotFoundException, SQLException {
		System.out.println("hi");
		BootDTO bootDTO = new BootDTO();
		bootDTO.registernr = "162hgh";
		bootDTO.abwassertankgroesse = 3.3;
		Fassade fassade = new Fassade();
		fassade.saveBoot(bootDTO);
		BootDTO bootDTO2 = new BootDTO();
		bootDTO2 = fassade.getBoot("162hgh");
		System.out.println(bootDTO2.abwassertankgroesse);
		
//		DBAccess myDBAccess = new DBAccess();
//		Connection connection = myDBAccess.getConnection();

	}

}
