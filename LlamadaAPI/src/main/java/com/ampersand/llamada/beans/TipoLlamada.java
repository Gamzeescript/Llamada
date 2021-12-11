package com.ampersand.llamada.beans;

import java.util.ArrayList;
import java.util.List;
import javax.persistence.FetchType;
import javax.persistence.OneToMany;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

import com.fasterxml.jackson.annotation.JsonIgnoreProperties;

/** Entidad de la cual crearemos la persistencia y de donde se consumiran nuestros datos */

@Entity
@Table(name="tipo_llamada")
@JsonIgnoreProperties({"hibernateLazyInitializer","handler"})
public class TipoLlamada {
	
	private long id_tipo_llamada;
	private String tipo_llamada;
	private List<Gestion> gestion = new ArrayList<Gestion>(0);
	
	
	public TipoLlamada() {
		
	}


	public TipoLlamada(long id_tipo_llamada, String tipo_llamada, List<Gestion> gestion) {
		super();
		this.id_tipo_llamada = id_tipo_llamada;
		this.tipo_llamada = tipo_llamada;
		this.gestion = gestion;
	}
	

	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	@Column(name="id_tipo_llamada")
	public long getId_tipo_llamada() {
		return id_tipo_llamada;
	}


	public void setId_tipo_llamada(long id_tipo_llamada) {
		this.id_tipo_llamada = id_tipo_llamada;
	}


	@Column(name="tipo_llamada")
	public String getTipo_llamada() {
		return tipo_llamada;
	}


	public void setTipo_llamada(String tipo_llamada) {
		this.tipo_llamada = tipo_llamada;
	}


	@OneToMany(fetch = FetchType.LAZY, mappedBy = "tipoLlamada")
	public List<Gestion> getGestion() {
		return gestion;
	}


	public void setGestion(List<Gestion> gestion) {
		this.gestion = gestion;
	}
	
	
	
	

}
