package fassade;

import java.sql.*;
import java.util.GregorianCalendar;
import java.util.HashMap;
import backend.*;

public class Fassade {
	private Connection connection;

	public Fassade() {
		try {
			connection = new DBAccess().getConnection();
			// connection.close();
		} catch (ClassNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}

	// <-------------Boot------------->
	public HashMap<String, BootDTO> getUebersicht() {
		HashMap<String, BootDTO> bootDTOMap = new HashMap<String, BootDTO>();
		try {
			ResultSet result = connection.createStatement().executeQuery(
					"Select * From boatinformation");
			while (result.next()) {
				bootDTOMap.put(
						result.getString("registernr"),
						new BootDTO(result.getString("registernr"), result
								.getString("bootsname"), result
								.getString("segelzeichen"), result
								.getString("heimathafen"), result
								.getString("yachtclub"), result
								.getString("eigner"), result
								.getString("versicherung"), result
								.getString("rufzeichen"), result
								.getString("typ"), result
								.getString("konstrukteur"), result
								.getDouble("laenge"), result
								.getDouble("breite"), result
								.getDouble("tiefgang"), result
								.getDouble("masthoehe"), result
								.getDouble("verdraengung"), result
								.getString("rigArt"), result.getInt("baujahr"),
								result.getString("motor"), result
										.getDouble("tankgroesse"), result
										.getDouble("wassertankgroesse"), result
										.getDouble("abwassertankgroesse"),
								result.getDouble("grosssegelgroesse"), result
										.getDouble("genuagroesse"), result
										.getDouble("spiegroesse")));
			}
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return bootDTOMap;
	}

	public BootDTO getBoot(String key) {
		BootDTO bootDTO = null;
		try {
			ResultSet result = connection.createStatement().executeQuery(
					"Select * From boatinformation where registernr='" + key
							+ "'");
			result.next();
			bootDTO = new BootDTO(result.getString("registernr"),
					result.getString("bootsname"),
					result.getString("segelzeichen"),
					result.getString("heimathafen"),
					result.getString("yachtclub"), result.getString("eigner"),
					result.getString("versicherung"),
					result.getString("rufzeichen"), result.getString("typ"),
					result.getString("konstrukteur"),
					result.getDouble("laenge"), result.getDouble("breite"),
					result.getDouble("tiefgang"),
					result.getDouble("masthoehe"),
					result.getDouble("verdraengung"),
					result.getString("rigArt"), result.getInt("baujahr"),
					result.getString("motor"), result.getDouble("tankgroesse"),
					result.getDouble("wassertankgroesse"),
					result.getDouble("abwassertankgroesse"),
					result.getDouble("grosssegelgroesse"),
					result.getDouble("genuagroesse"),
					result.getDouble("spiegroesse"));
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return bootDTO;
	}

	public void saveBoot(BootDTO bootDTO) {
		try {
			Statement myStatement = connection.createStatement();
			myStatement.execute("insert into boatinformation values ('"
					+ bootDTO.registernr + "', '" + bootDTO.bootsname + "', '"
					+ bootDTO.segelzeichen + "', '" + bootDTO.heimathafen
					+ "', '" + bootDTO.yachtclub + "','" + bootDTO.eigner
					+ "','" + bootDTO.versicherung + "', '"
					+ bootDTO.rufzeichen + "', '" + bootDTO.typ + "', '"
					+ bootDTO.konstrukteur + "', " + bootDTO.laenge + ", "
					+ bootDTO.breite + ", " + bootDTO.tiefgang + ", "
					+ bootDTO.masthoehe + ", " + bootDTO.verdraengung + ", '"
					+ bootDTO.rigArt + "', " + bootDTO.baujahr + ", '"
					+ bootDTO.motor + "', " + bootDTO.tankgroesse + ","
					+ bootDTO.wassertankgroesse + ","
					+ bootDTO.abwassertankgroesse + ", "
					+ bootDTO.grosssegelgroesse + ", " + bootDTO.genuagroesse
					+ ", " + bootDTO.spigroesse
					+ ") ON DUPLICATE KEY UPDATE bootsname='"
					+ bootDTO.bootsname + "', segelzeichen='"
					+ bootDTO.segelzeichen + "',heimathafen='"
					+ bootDTO.heimathafen + "',yachtclub='" + bootDTO.yachtclub
					+ "',eigner='" + bootDTO.eigner + "',versicherung='"
					+ bootDTO.versicherung + "',rufzeichen='"
					+ bootDTO.rufzeichen + "',typ='" + bootDTO.typ
					+ "',konstrukteur='" + bootDTO.konstrukteur + "',laenge='"
					+ bootDTO.laenge + "',breite='" + bootDTO.breite
					+ "',tiefgang='" + bootDTO.tiefgang + "',masthoehe='"
					+ bootDTO.masthoehe + "',verdraengung='"
					+ bootDTO.verdraengung + "',rigart='" + bootDTO.rigArt
					+ "',baujahr='" + bootDTO.baujahr + "',motor='"
					+ bootDTO.motor + "',tankgroesse='" + bootDTO.tankgroesse
					+ "',wassertankgroesse='" + bootDTO.wassertankgroesse
					+ "',abwassertankgroesse='" + bootDTO.abwassertankgroesse
					+ "',grosssegelgroesse='" + bootDTO.grosssegelgroesse
					+ "',genuagroesse='" + bootDTO.genuagroesse
					+ "',spiegroesse='" + bootDTO.spigroesse + "'");
			myStatement.close();
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}

	}

	public void deleteBoot(String key) {
		try {
			Statement myStatement = connection.createStatement();
			myStatement
					.execute("DELETE FROM boatinformation WHERE registernr='"
							+ key + "'");
			myStatement.close();
			// connection.close();
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}

	// <-------------Trip------------->
	public HashMap<String, TripDTO> getTripList(String registernr) {
		HashMap<String, TripDTO> tripDTOMap = new HashMap<String, TripDTO>();
		try {
			ResultSet result = connection.createStatement().executeQuery(
					"Select * From tripinformation where registernr='"
							+ registernr + "'");
			while (result.next()) {
				tripDTOMap.put(
						result.getString("title"),
						new TripDTO(result.getString("title"), result
								.getString("von"), result.getString("nach"),
								result.getString("skipper"), result
										.getString("crew"), result
										.getString("start"), result
										.getString("ende"), result
										.getDouble("dauer"), result
										.getInt("motor"), result
										.getInt("tankgefuellt"), result
										.getString("notes"), result
										.getString("registernr")));
			}

		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return tripDTOMap;
	}

	public TripDTO getTrip(String title) {
		TripDTO tripDTO = null;
		try {
			ResultSet result = connection.createStatement()
					.executeQuery(
							"Select * From tripinformation WHERE title='"+ title + "'");
			result.next();
			tripDTO = new TripDTO(title, result.getString("von"),
					result.getString("nach"), result.getString("skipper"),
					result.getString("crew"), result.getString("start"),
					result.getString("ende"), result.getDouble("dauer"),
					result.getInt("motor"), result.getInt("tankgefuellt"),
					result.getString("notes"), result.getString("registernr"));
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return tripDTO;
	}

	public void saveTrip(TripDTO tripDTO) {
		try {
			Statement myStatement = connection.createStatement();
			myStatement.execute("insert into tripinformation VALUES ('"
					+ tripDTO.title + "','" + tripDTO.von + "','"
					+ tripDTO.nach + "','" + tripDTO.skipper + "','"
					+ tripDTO.crew + "','" + tripDTO.start + "','"
					+ tripDTO.ende + "','" + tripDTO.dauer + "','"
					+ tripDTO.motor + "','" + tripDTO.tankgefuellt + "','"
					+ tripDTO.notes + "','" + tripDTO.registernr
					+ "')ON DUPLICATE KEY UPDATE title='" + tripDTO.title
					+ "', von='" + tripDTO.von + "',nach='" + tripDTO.nach
					+ "',skipper='" + tripDTO.skipper + "',crew='"
					+ tripDTO.crew + "',start='" + tripDTO.start + "',ende='"
					+ tripDTO.ende + "',dauer='" + tripDTO.dauer + "',motor='"
					+ tripDTO.motor + "',tankgefuellt='" + tripDTO.tankgefuellt
					+ "',notes='" + tripDTO.notes + "',registernr='"
					+ tripDTO.registernr + "'");
			myStatement.close();
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}

	public void deleteTrip(String title) {
		try {
			Statement myStatement = connection.createStatement();
			myStatement
					.execute("DELETE FROM tripinformation WHERE title='"
							+ title + "'");
			myStatement.close();
			// connection.close();
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}

	// <-------------Entry------------->
	public HashMap<String, EntryDTO> getEntrysTrip(String triptitle){
		HashMap<String, EntryDTO> entryDTOMap = new HashMap<String, EntryDTO>();
		try {
			ResultSet result = connection.createStatement().executeQuery("Select * From entryinformation where triptitle='"+triptitle+"'");
//			GregorianCalendar time;
			while(result.next()){
//				time = new GregorianCalendar();
//				time.setTime(result.getTimestamp("time"));
				entryDTOMap.put(result.getString("name"), new EntryDTO(result.getString("name"),
						result.getInt("ngrad"), result.getInt("nmin"), result.getInt("nsec"),
						result.getInt("egrad"), result.getInt("emin"), result.getInt("esec"),
						result.getDouble("cog"), result.getDouble("sog"), result.getInt("btm"),
						result.getDouble("dtm"), result.getString("fahrtnach"), result.getString("manoever"),
						result.getString("vorsegel"), result.getString("grosssegel"), result.getString("notes"),
//						time,
						result.getString("triptitle")
						)
				);
			}
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}	
		return entryDTOMap;
	}
	public EntryDTO getEntry(String entryName){
		EntryDTO entryDTO = null;
		try {
			ResultSet result = connection.createStatement().executeQuery("Select * From entryinformation where name='"+entryName+"'");
//			GregorianCalendar time;
			while(result.next()){
//				time = new GregorianCalendar();
//				time.setTime(result.getTimestamp("time"));
				entryDTO = new EntryDTO(result.getString("name"),
						result.getInt("ngrad"), result.getInt("nmin"), result.getInt("nsec"),
						result.getInt("egrad"), result.getInt("emin"), result.getInt("esec"),
						result.getDouble("cog"), result.getDouble("sog"), result.getInt("btm"),
						result.getDouble("dtm"), result.getString("fahrtnach"), result.getString("manoever"),
						result.getString("vorsegel"), result.getString("grosssegel"), result.getString("notes"),
						result.getString("triptitle"));
			}
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return entryDTO;
	}

public void saveEntry(EntryDTO entryDTO){
	try {
		Statement myStatement = connection.createStatement();
		myStatement.execute("insert into entryinformation (name,ngrad,nmin,nsec,egrad,emin,esec,cog,sog,btm,dtm,fahrtnach,manoever,vorsegel,grosssegel,notes,triptitle) VALUES ('"
				+ entryDTO.name + "','" + entryDTO.ngrad + "','"
				+ entryDTO.nmin + "','" + entryDTO.nsec + "','"
				+ entryDTO.egrad + "','" + entryDTO.emin + "','"
				+ entryDTO.esec + "','" + entryDTO.cog + "','"
				+ entryDTO.sog + "','" + entryDTO.btm + "','"
				+ entryDTO.dtm + "','" + entryDTO.fahrtNach + "','"
				+ entryDTO.manoever + "','" + entryDTO.vorsegel + "','"
				+ entryDTO.grosssegel + "','" + entryDTO.notes + "','" 
				+ entryDTO.triptitle +"')ON DUPLICATE KEY UPDATE name='" + entryDTO.name +"', ngrad='"+ entryDTO.ngrad + "',nmin='" + entryDTO.nmin + "',nsec='"
					+ entryDTO.nsec + "',egrad='" + entryDTO.egrad + "',emin='"
					+ entryDTO.emin + "',esec='" + entryDTO.esec + "',cog='"
					+ entryDTO.cog + "',sog='" + entryDTO.sog + "',btm='"
					+ entryDTO.btm + "',dtm='" + entryDTO.dtm + "',fahrtnach='"
					+ entryDTO.fahrtNach+  "',manoever='" + entryDTO.manoever + "',vorsegel='"
					+ entryDTO.vorsegel + "',grosssegel='" + entryDTO.grosssegel + "',notes='"
					+ entryDTO.notes + "',triptitle='"
					+ entryDTO.triptitle+ "'");
		myStatement.close();
		
	} catch (SQLException e) {
		// TODO Auto-generated catch block
		e.printStackTrace();
	}
	}
public void deleteEntry(String name) {
	try {
		Statement myStatement = connection.createStatement();
		myStatement
				.execute("DELETE FROM entryinformation WHERE name='"
						+ name + "'");
		myStatement.close();
		// connection.close();
	} catch (SQLException e) {
		// TODO Auto-generated catch block
		e.printStackTrace();
	}
}
}