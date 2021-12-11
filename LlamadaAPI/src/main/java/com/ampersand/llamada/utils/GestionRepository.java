package com.ampersand.llamada.utils;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;


import com.ampersand.llamada.beans.Gestion;

@Repository
public interface GestionRepository extends JpaRepository<Gestion, Long>{

}
