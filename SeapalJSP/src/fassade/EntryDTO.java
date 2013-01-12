package fassade;

import java.util.GregorianCalendar;

public class EntryDTO {
	//Variablen noch public um kompatibilität zu gewährleisten
	public String name;
	public int ngrad;
	public int nmin;
	public int nsec;
	public int egrad;
	public int emin;
	public int esec;
	public double cog;
	public double sog;
	public int btm;
	public double dtm;
	public String fahrtNach;
	public String manoever;
	public String vorsegel;
	public String grosssegel;
	public String notes;
	public GregorianCalendar time;
	public String triptitle;
	
	
	public EntryDTO() {
		super();
		// TODO Auto-generated constructor stub
	}
	public EntryDTO(String name, int ngrad, int nmin, int nsec, int egrad,
			int emin, int esec, double cog, double sog, int btm, double dtm,
			String fahrtNach, String manoever, String vorsegel,
			String grosssegel, String notes,String triptitle
			) {
		super();
		this.name = name;
		this.ngrad = ngrad;
		this.nmin = nmin;
		this.nsec = nsec;
		this.egrad = egrad;
		this.emin = emin;
		this.esec = esec;
		this.cog = cog;
		this.sog = sog;
		this.btm = btm;
		this.dtm = dtm;
		this.fahrtNach = fahrtNach;
		this.manoever = manoever;
		this.vorsegel = vorsegel;
		this.grosssegel = grosssegel;
		this.notes = notes;
//		this.time = time;
		this.triptitle = triptitle;
	}
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	public int getNgrad() {
		return ngrad;
	}
	public void setNgrad(int ngrad) {
		this.ngrad = ngrad;
	}
	public int getNmin() {
		return nmin;
	}
	public void setNmin(int nmin) {
		this.nmin = nmin;
	}
	public int getNsec() {
		return nsec;
	}
	public void setNsec(int nsec) {
		this.nsec = nsec;
	}
	public int getEgrad() {
		return egrad;
	}
	public void setEgrad(int egrad) {
		this.egrad = egrad;
	}
	public int getEmin() {
		return emin;
	}
	public void setEmin(int emin) {
		this.emin = emin;
	}
	public int getEsec() {
		return esec;
	}
	public void setEsec(int esec) {
		this.esec = esec;
	}
	public double getCog() {
		return cog;
	}
	public void setCog(double cog) {
		this.cog = cog;
	}
	public double getSog() {
		return sog;
	}
	public void setSog(double sog) {
		this.sog = sog;
	}
	public int getBtm() {
		return btm;
	}
	public void setBtm(int btm) {
		this.btm = btm;
	}
	public double getDtm() {
		return dtm;
	}
	public void setDtm(double dtm) {
		this.dtm = dtm;
	}
	public String getFahrtNach() {
		return fahrtNach;
	}
	public void setFahrtNach(String fahrtNach) {
		this.fahrtNach = fahrtNach;
	}
	public String getManoever() {
		return manoever;
	}
	public void setManoever(String manoever) {
		this.manoever = manoever;
	}
	public String getVorsegel() {
		return vorsegel;
	}
	public void setVorsegel(String vorsegel) {
		this.vorsegel = vorsegel;
	}
	public String getGrosssegel() {
		return grosssegel;
	}
	public void setGrosssegel(String grosssegel) {
		this.grosssegel = grosssegel;
	}
	public String getNotes() {
		return notes;
	}
	public void setNotes(String notes) {
		this.notes = notes;
	}
	public GregorianCalendar getTime() {
		return time;
	}
	public void setTime(GregorianCalendar time) {
		this.time = time;
	}
	public String getTriptitle() {
		return triptitle;
	}
	public void setTriptitle(String triptitle) {
		this.triptitle = triptitle;
	}
	
	
}
