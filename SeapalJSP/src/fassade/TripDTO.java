package fassade;

public class TripDTO {
	//Variablen noch public um kompatibilität zu gewährleisten

	public String title;
	public String von;
	public String nach;
	public String skipper;
	public String crew;
	public String start;
	public String ende;
	public double dauer;
	public int motor;
	public int tankgefuellt;
	public String notes;
	public String registernr;
		
	public TripDTO() {
		super();
		// TODO Auto-generated constructor stub
	}
	public TripDTO(String title, String von, String nach, String skipper,
			String crew, String start, String ende, double dauer, int motor,
			int tankgefuellt, String notes, String registernr) {
		super();
		this.title = title;
		this.von = von;
		this.nach = nach;
		this.skipper = skipper;
		this.crew = crew;
		this.start = start;
		this.ende = ende;
		this.dauer = dauer;
		this.motor = motor;
		this.tankgefuellt = tankgefuellt;
		this.notes = notes;
		this.registernr = registernr;
	}
	public String getTitle() {
		return title;
	}
	public void setTitle(String title) {
		this.title = title;
	}
	public String getVon() {
		return von;
	}
	public void setVon(String von) {
		this.von = von;
	}
	public String getNach() {
		return nach;
	}
	public void setNach(String nach) {
		this.nach = nach;
	}
	public String getSkipper() {
		return skipper;
	}
	public void setSkipper(String skipper) {
		this.skipper = skipper;
	}
	public String getCrew() {
		return crew;
	}
	public void setCrew(String crew) {
		this.crew = crew;
	}
	public String getStart() {
		return start;
	}
	public void setStart(String start) {
		this.start = start;
	}
	public String getEnde() {
		return ende;
	}
	public void setEnde(String ende) {
		this.ende = ende;
	}
	public double getDauer() {
		return dauer;
	}
	public void setDauer(double dauer) {
		this.dauer = dauer;
	}
	public int getMotor() {
		return motor;
	}
	public void setMotor(int motor) {
		this.motor = motor;
	}
	public int isTankgefuellt() {
		return tankgefuellt;
	}
	public void setTankgefuellt(int tankgefuellt) {
		this.tankgefuellt = tankgefuellt;
	}
	public String getNotes() {
		return notes;
	}
	public void setNotes(String notes) {
		this.notes = notes;
	}
	public String getRegisternr() {
		return registernr;
	}
	public void setRegisternr(String registernr) {
		this.registernr = registernr;
	}
	
	
	
}
